<?php

namespace App\Livewire;

use App\Enum\ProductStatusEnum;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class LandingPage extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 12;

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search = trim($this->search);
        $query = Category::whereNull('parent_id')->with(['products', 'subCategories.products']);
        if ($search) {

            $query->where(function ($q) use ($search) {

                //Parent category name
                $q->where('name', 'like', "%{$search}%")
                    //product under parent category
                    ->orWhereHas('products', function ($q2) use ($search) {
                        $q2->where('name', 'like', "%{$search}%")
                            ->where('status', ProductStatusEnum::ACTIVE);
                    })
                    //sub-category or products
                    ->orWhereHas('subCategories', function ($q3) use ($search) {
                        $q3->where('name', 'like', "%{$search}%")
                            ->orWhereHas('products', function ($q4) use ($search) {
                                $q4->where('name', 'like', "%{$search}%")
                                    ->where('status', ProductStatusEnum::ACTIVE);
                            });
                    });
            });
        }

        $categories = $query->orderBy('name')->paginate($this->perPage);

        $categories->getCollection()->transform(function ($category) {
            $subCategoryTotal = $category->subCategories->sum(fn($sub) => $sub->products->count());
            $category->total_products_count = $subCategoryTotal + $category->products->count();
            return $category;
        });

        return view('livewire.landing-page', ['categories' => $categories]);
    }
}

<?php

namespace App\Livewire;

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
        $query = Category::whereNull('parent_id')->with('subCategories.products');
        if ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhereHas('subCategories', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")->orWhereHas('products', function ($q2) use ($search) {
                        $q2->where('name', 'like', "%{$search}%");
                    });
                });
        }
        $categories = $query->paginate($this->perPage);

        $categories->getCollection()->transform(function ($category) {
            $category->total_products_count = $category->subCategories->sum(fn($sub) => $sub->products->count());
            return $category;
        });

        return view('livewire.landing-page', ['categories' => $categories]);
    }
}

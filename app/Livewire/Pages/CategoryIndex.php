<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public Category $category;

    public function render()
    {
        $subCategories = $this->category->subCategories()->get();
        return view('livewire.pages.category-index', ['subCategories' => $subCategories]);
    }
}

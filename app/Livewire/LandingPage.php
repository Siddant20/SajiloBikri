<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class LandingPage extends Component
{
    public $search ;
    public $categories;

    public function mount()
    {
        $this->categories = Category::whereNull('parent_id')->get();
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}

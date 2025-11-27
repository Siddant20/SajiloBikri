<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class VendorDashboard extends Component
{
    public $products;

    public function mount()
    {
        $this->products = auth()->user()->vendorProfile->products;
    }

    public function render()
    {
        return view('livewire.vendor-dashboard');
    }
}

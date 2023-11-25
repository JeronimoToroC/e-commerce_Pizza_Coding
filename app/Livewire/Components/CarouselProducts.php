<?php

namespace App\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class CarouselProducts extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.components.carousel-products', compact('products'));
    }
}

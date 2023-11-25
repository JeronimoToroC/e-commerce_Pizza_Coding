<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Category;
class CardCategories extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.components.card-categories', compact('categories'));
    }
}

<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CardCategories extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.components.card-categories');
    }
}

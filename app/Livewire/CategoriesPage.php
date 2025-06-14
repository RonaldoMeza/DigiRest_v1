<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Categorías - DigiRest')]

class CategoriesPage extends Component
{
    public function render()
    {
        return view('livewire.categories-page');
    }
}

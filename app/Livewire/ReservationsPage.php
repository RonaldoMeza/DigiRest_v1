<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Reservas - DigiRest')]

class ReservationsPage extends Component
{
    public function render()
    {
        return view('livewire.reservations-page');
    }
}

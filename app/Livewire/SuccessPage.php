<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

#[Title('Pedido exitoso - DigiRest')]

class SuccessPage extends Component
{
    public function render()
    {
        // Obtenemos el último pedido creado por el usuario que ha iniciado sesión actualmente.
        $latest_order = Order::with('address')->where('user_id', Auth::user()->id)
        ->latest()
        ->first();

        return view('livewire.success-page', [
            'order' => $latest_order,
        ]);
    }
}

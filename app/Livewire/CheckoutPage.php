<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Verificación de compra - DigiRest')]

class CheckoutPage extends Component
{

    public $first_name;
    public $last_name;
    public $phone;
    public $district;
    public $street_address;
    public $reference;
    public $payment_method;

    public function placeOrder(){
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'district' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'reference' => 'nullable|string|max:255',
            'payment_method' => 'required|in:tarjeta,efectivo', // Assuming these are the payment methods
        ]);
    }

    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);
        return view('livewire.checkout-page', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
        ]);
    }
}

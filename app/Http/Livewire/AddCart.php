<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddCart extends Component
{
    // public array $qnt = [];
    public function render()
    {
        return view('livewire.shoppingCart.add-cart');
    }
    public function addToCart($product_id)
    {
        // dd($product_id);
        Cart::instance('shoppingCart')->add(
            $product_id,
            'Product 1',
            1,
            9.99
        );

        $this->emit('cart_updated');
        $this->emit('displayCartAlert',Str::random(10));
    }
}

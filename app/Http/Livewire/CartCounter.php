<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated'=>'render'];
    public function render()
    {
        // $this->test = $test;
        $cart_count = Cart::instance('shoppingCart')->content()->count();
        return view('livewire.shoppingCart.cart-counter',compact('cart_count'));
    }
}

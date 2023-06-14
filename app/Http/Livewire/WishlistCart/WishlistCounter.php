<?php

namespace App\Http\Livewire\WishlistCart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistCounter extends Component
{
    protected $listeners = ['wishlist_updated'=>'render'];
    public function render()
    {
        $wishlist_counter = Cart::instance('wishlistCart')->content()->count();
        return view('livewire.wishlist-cart.wishlist-counter',compact('wishlist_counter'));
    }
}

<?php

namespace App\Http\Livewire\WishlistCart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistAdd extends Component
{
    public function render()
    {
        return view('livewire.wishlist-cart.wishlist-add');
    }
    public function addToWishlist($product_id)
    {
        Cart::instance('wishlistCart')->add($product_id,'name',1,23.32);
        $this->emit('wishlist_updated');
        return view('livewire.wishlist-cart.wishlist-add');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartAlert extends Component
{
    public $cartAlertName; // Declare the property

    protected $listeners = ['displayCartAlert'];

    public function render()
    {
        // {{ method 1 }}
        // return view('livewire.cart-alert')->with(['cartAlertName']);
        // {{ method 2 }}
        return view('livewire.shoppingCart.cart-alert',[
            'cartAlertName'=>$this->cartAlertName
        ]);
    }

    public function displayCartAlert($name)
    {
        $this->cartAlertName = $name;
    }
}

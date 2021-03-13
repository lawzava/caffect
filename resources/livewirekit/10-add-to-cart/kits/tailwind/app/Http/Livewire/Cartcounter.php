<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Cartcounter extends Component
{
    protected $listeners = ['updateCart' => 'render'];

    public function render()
    {
        return view('livewire.cartcounter', [
            'cartAmount' => Cart::count(),
        ]);
    }
}

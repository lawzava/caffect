<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Cartcounter extends Component
{
    protected $listeners = ['updateCart' => 'render'];
    public $designTemplate = 'tailwind';

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.cartcounter', [
            'cartAmount' => Cart::count(),
        ]);
    }
}

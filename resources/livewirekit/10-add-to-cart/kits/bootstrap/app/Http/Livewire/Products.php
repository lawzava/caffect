<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $cartProducts = [];

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::all()
        ]);
    }

    public function addToCart($productId)
    {
        Cart::create(['product_id' => $productId]);
        $this->cartProducts[] = $productId;
        $this->emit('updateCart');
    }

    public function removeFromCart($productId)
    {
        Cart::where('product_id', $productId)->delete();
        if (($key = array_search($productId, $this->cartProducts)) !== false) {
            unset($this->cartProducts[$key]);
        }
        $this->emit('updateCart');
    }
}

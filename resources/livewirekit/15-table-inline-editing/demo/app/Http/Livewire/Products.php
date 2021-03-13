<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $editedProductIndex = null;
    public $products = [];

    public $designTemplate = 'tailwind';

    public function render()
    {
        $this->products = Product::all()->toArray();

        return view('livewire.'.$this->designTemplate.'.products', [
            'products' => $this->products
        ]);
    }

    public function editProduct($productIndex)
    {
        $this->editedProductIndex = $productIndex;
    }

    public function saveProduct($productIndex)
    {
        $product = $this->products[$productIndex] ?? NULL;
        if (!is_null($product)) {
            $editedProduct = Product::find($product['id']);
            if ($editedProduct) {
                $editedProduct->update($product);
            }
        }
        $this->editedProductIndex = null;
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductForm extends Component
{
    public $name;
    public $description;
    public $messageText = '';

    public $rules = [
        'name' => 'min:3|unique:products',
        'description' => 'min:50',
    ];

    public function render()
    {
        return view('livewire.product-form');
    }

    public function updated($key, $value)
    {
        $this->validateOnly($key);
    }

    public function save()
    {
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->messageText = 'Product ' . $this->name . ' is saved';
        $this->name = '';
        $this->description = '';
    }
}

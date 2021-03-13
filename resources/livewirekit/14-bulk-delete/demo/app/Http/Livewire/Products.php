<?php

namespace App\Http\Livewire;

use App\Models\ProductCategory;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $selectedProducts = [];

    public bool $bulkDisabled = true;

    public $designTemplate = 'tailwind';

    public function render()
    {
        $this->bulkDisabled = count($this->selectedProducts) < 1;

        return view('livewire.'.$this->designTemplate.'.products', [
            'products' => Product::with('category')->get()
        ]);
    }

    public function deleteSelected()
    {
        Product::query()
            ->whereIn('id', $this->selectedProducts)
            ->delete();
        $this->selectedProducts = [];
    }
}

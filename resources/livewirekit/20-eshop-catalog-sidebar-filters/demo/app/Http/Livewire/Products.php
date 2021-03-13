<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    protected $selected = [
        'prices' => [],
        'categories' => [],
        'manufacturers' => []
    ];

    protected $listeners = ['updatedSidebar' => 'setSelected'];

    public $designTemplate = 'tailwind';

    public function render()
    {
        $products = Product::withFilters(
            $this->selected['prices'],
            $this->selected['categories'],
            $this->selected['manufacturers']
        )->get();

        return view('livewire.'.$this->designTemplate.'.products', compact('products'));
    }

    public function setSelected($selected)
    {
        $this->selected = $selected;
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Coffee;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $showModal = false;
    public $productId;
    public $product;

    protected $paginationTheme = 'tailwind';

    protected $rules = [
        'product.name' => 'required|min:3|max:255',
        'product.producer' => 'max:255',
        'product.origin' => 'max:255',
        'product.taste' => 'integer|between:1,10',
        'product.aroma' => 'integer|between:1,10',
    ];

    public function render()
    {
        return view('livewire.products', [
            'products' => Coffee::where("user_id", auth()->user()->id)->latest()->paginate(10)
        ]);
    }

    public function edit($productId)
    {
        $this->showModal = true;
        $this->productId = $productId;
        $this->product = Coffee::where("user_id", auth()->user()->id)->find($productId);
    }

    public function create()
    {
        $this->showModal = true;
        $this->product = null;
        $this->productId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
            $this->product['user_id'] = auth()->user()->id;
            Coffee::create($this->product);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($productId)
    {
        $product = Coffee::where("user_id", auth()->user()->id)->find($productId);
        if ($product) {
            $product->delete();
        }
    }
}

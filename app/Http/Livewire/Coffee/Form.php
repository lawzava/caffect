<?php

namespace App\Http\Livewire\Coffee;

use App\Enums\Countries;
use App\Models\Coffee;
use Livewire\Component;

const MAX_255 = 'nullable|max:255';
const INT_1_10 = 'nullable|integer|between:1,10';

class Form extends Component
{
    public $name;
    public $producer;
    public $origin;
    public $taste;
    public $aroma;


    protected $rules = [
        'name' => 'required|between:3,255',
        'producer' => MAX_255,
        'origin' => 'nullable|enum_value:' . Countries::class,
        'taste' => INT_1_10,
        'aroma' => INT_1_10,
    ];

    protected $messages = [
        'origin.enum_value' => 'The country is invalid.',
    ];


    public function render()
    {
        return view('livewire.coffee.form');
    }

    public function createItem()
    {
        $this->validate();

        $c = new Coffee;

        $c->name = $this->name;
        $c->producer = $this->producer;
        $c->origin = $this->origin;
        $c->taste = $this->taste;
        $c->aroma = $this->aroma;

        $c->user_id = auth()->user()->id;

        $c->save();

        $this->emit('saved');
    }
}

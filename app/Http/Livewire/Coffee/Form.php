<?php

namespace App\Http\Livewire\Coffee;

use App\Enums\Countries;
use App\Models\Coffee;
use Livewire\Component;

const MAX_255 = 'required|max:255';
const INT_1_10 = 'required|integer|between:1,10';

class Form extends Component
{
    public $name;
    public $producer;
    public $origin;
    public $taste;
    public $aroma;
    public $showDropdown = false;


    protected $rules = [
        'name' => MAX_255,
        'producer' => MAX_255,
        'origin' => 'required|enum_key:' . Countries::class,
        'taste' => INT_1_10,
        'aroma' => INT_1_10,
    ];

    protected $messages = [
        'origin.enum_value' => 'The country is invalid.',
    ];


    public function render()
    {
        $countries = Countries::asArray();

        $c = new Coffee;

        return view('livewire.coffee.form', [
            'countries' => $countries,
            'coffee' => $c,
        ]);
    }

    public function createItem()
    {
        $this->validate();

        $c = new Coffee;

        $c->name = $this->name;
        $c->producer = $this->producer;
        $c->origin = Countries::getValue($this->origin);
        $c->taste = $this->taste;
        $c->aroma = $this->aroma;

        $c->user_id = auth()->user()->id;

        $c->save();

        $this->emit('saved');
        $this->showDropdown = false;
    }
}

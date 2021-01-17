<?php

namespace App\Http\Livewire\Coffee;

use Livewire\Component;
use App\Models\Coffee;

const MAX_255 = 'nullable|max:255';
const INT_1_10 = 'nullable|integer|between:1,10';

class Form extends Component
{
    public $name;
    public $brewing_method;
    public $roast;
    public $grind;
    public $origin;
    public $producer;
    public $notes;
    public $body;
    public $aroma;
    public $acidity;
    public $bitterness;
    public $sweetness;


    protected $rules = [
        'name' => 'required|between:3,255',
        'brewing_method' => MAX_255,
        'roast' => MAX_255,
        'grind' => MAX_255,
        'origin' => MAX_255,
        'producer' => MAX_255,
        'notes' => INT_1_10,
        'body' => INT_1_10,
        'aroma' => INT_1_10,
        'acidity' => INT_1_10,
        'bitterness' => INT_1_10,
        'sweetness' => INT_1_10
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
        $c->brewing_method = $this->brewing_method;
        $c->roast = $this->roast;
        $c->grind = $this->grind;
        $c->origin = $this->origin;
        $c->producer = $this->producer;
        $c->notes = $this->notes;
        $c->body = $this->body;
        $c->aroma = $this->aroma;
        $c->acidity = $this->acidity;
        $c->bitterness = $this->bitterness;
        $c->sweetness = $this->sweetness;

        $c->save();

        $this->emit('saved');
    }
}

<?php

namespace App\Http\Livewire\Coffee;

use App\Models\Coffee;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['saved'];

    public function saved()
    {
        $this->render();
    }

    public function render()
    {
        $list = auth()->user()->coffees->sortByDesc('created_at');

        return view('livewire.coffee.show', ['list' => $list]);
    }

    public function deleteItem(Coffee $item)
    {
        $item->delete();

        $this->emit('saved');
    }
}

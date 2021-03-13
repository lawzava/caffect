<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;

class States extends Component
{
    public $amount = 5;

    public function render()
    {
        $query = State::query();

        return view('livewire.states', [
            'states' => $query->take($this->amount)->get(),
            'showLoadMoreButton' => $query->count() > $this->amount
        ]);
    }

    public function loadmore()
    {
        $this->amount += 5;
    }
}

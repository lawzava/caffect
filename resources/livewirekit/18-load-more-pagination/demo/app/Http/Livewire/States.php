<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;

class States extends Component
{
    public $amount = 5;

    public $designTemplate = 'tailwind';

    public function render()
    {
        $query = State::query();

        return view('livewire.'.$this->designTemplate.'.states', [
            'states' => $query->take($this->amount)->get(),
            'showLoadMoreButton' => $query->count() > $this->amount
        ]);
    }

    public function loadmore()
    {
        $this->amount += 5;
    }
}

<?php

namespace App\Http\Livewire\Coffee;

use Livewire\Component;

class Summary extends Component
{
    protected $listeners = ['saved'];

    public function saved()
    {
        $this->render();
    }

    public function render()
    {
        $list = auth()->user()->coffees;

        $rated = $list->count();
        $averageTaste = round($list->avg('taste'), 2) ? : 0;
        $averageAroma = round($list->avg('aroma'), 2) ? : 0;
        $countries = $list->groupby('origin')->count();


        return view('livewire.coffee.summary', [
            'rated' => $rated,
            'averageTaste' => $averageTaste,
            'averageAroma' => $averageAroma,
            'countries' => $countries,
        ]);
    }
}

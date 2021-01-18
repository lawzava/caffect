<?php

namespace App\Http\Livewire\Coffee;

use Livewire\Component;

class Summary extends Component
{
    public function render()
    {
        $list = auth()->user()->coffees;

        $rated = $list->count();
        $averageTaste = $list->avg('taste') ? : 0;
        $averageAroma = $list->avg('aroma') ? : 0;
        $countries = $list->count();


        return view('livewire.coffee.summary', [
            'rated' => $rated,
            'averageTaste' => $averageTaste,
            'averageAroma' => $averageAroma,
            'countries' => $countries,
        ]);
    }
}

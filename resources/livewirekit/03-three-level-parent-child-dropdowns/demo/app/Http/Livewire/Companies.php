<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class Companies extends Component
{
    public $countries;
    public $states;
    public $cities;

    public $name;
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    public $designTemplate = 'tailwind';

    public function mount()
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.'. $this->designTemplate .'.companies', [
            'companies' => Company::with('city.state.country')->latest()->take(5)->get()
        ]);
    }

    public function updatedSelectedCountry($value)
    {
        $this->states = State::where('country_id', $value)->get();
        $this->selectedState = null;
    }

    public function updatedSelectedState($value)
    {
        if (!is_null($value)) {
            $this->cities = City::where('state_id', $value)->get();
        }
    }

    public function storeCompany()
    {
        $this->validate([
            'name' => 'required',
            'selectedCity' => 'required',
        ]);

        Company::create([
            'name' => $this->name,
            'city_id' => $this->selectedCity,
        ]);

        $this->name = '';
        $this->selectedCountry = null;
        $this->selectedState = null;
        $this->selectedCity = null;
        $this->states = collect();
        $this->cities = collect();
    }
}

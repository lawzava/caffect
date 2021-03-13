<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class MultiStepForm extends Component
{
    public $countries = [];
    public $cities = [];
    public $currentStep = 1;
    public $maxStep = 1;
    public $price = 0.00;
    public $adults = 0;
    public $children = 0;
    public $from_country = null;
    public $from_city = null;
    public $to_country = null;
    public $to_city = null;

    public $designTemplate = 'tailwind';

    protected $stepRules = [
        1 => [
            'from_country' => 'required',
            'from_city' => 'required',
        ],
        2 => [
            'to_country' => 'required',
            'to_city' => 'required',
        ],
        3 => [
            'adults' => 'required|integer|gt:0',
            'children' => 'required|integer|gte:0',
        ]
    ];

    public function mount()
    {
        $this->countries = Country::all();
        $this->cities = City::all()->groupBy('country_id')->toArray();
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.multi-step-form', [
            'fromCities' => $this->cities[$this->from_country] ?? [],
            'toCities' => $this->cities[$this->to_country] ?? [],
        ]);
    }

    public function changeStep($step)
    {
        if ($this->maxStep < $step) {
            return;
        }

        $this->currentStep = $step;
    }

    public function nextStep()
    {
        if (in_array($this->currentStep, array_keys($this->stepRules))) {
            $this->validate($this->stepRules[$this->currentStep]);
        }

        if ($this->currentStep >= 3) {
            $this->price = $this->adults * 100 + $this->children * 75;
            return;
        }

        $this->currentStep = $this->currentStep + 1;
        $this->maxStep = max($this->maxStep, $this->currentStep);
    }
}

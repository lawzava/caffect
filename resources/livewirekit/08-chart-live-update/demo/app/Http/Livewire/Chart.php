<?php

namespace App\Http\Livewire;

use App\Charts\CurrencyChart;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Chart extends Component
{
    public $chartDatasets = [[]];
    public $chartLabels = [];
    public $chartId = null;

    public $designTemplate = 'tailwind';

    public function addDataToChart()
    {
        $value = Http::get('https://api.coindesk.com/v1/bpi/currentprice.json')['bpi']['USD']['rate_float'] ?? null;

        if ($value)
        {
            $time = now()->format('H:i:s');

            $this->chartLabels[] = $time;
            $this->chartDatasets[0][] = $value;

            if (count($this->chartLabels) > 36) {
                unset($this->chartDatasets[0][0], $this->chartLabels[0]);
                $this->chartLabels = array_values($this->chartLabels);
                $this->chartDatasets[0] = array_values($this->chartDatasets[0]);
            }
        }
    }

    public function render()
    {
        $this->addDataToChart();

        if (!$this->chartId) {
            $chart = new CurrencyChart($this->chartDatasets, $this->chartLabels);

            $this->chartId = $chart->id;
        } else {
            $this->emit('chartUpdate', $this->chartId, $this->chartLabels, $this->chartDatasets);
        }

        return view('livewire.'.$this->designTemplate.'.chart', [
            'chart' => $chart ?? null
        ]);
    }
}

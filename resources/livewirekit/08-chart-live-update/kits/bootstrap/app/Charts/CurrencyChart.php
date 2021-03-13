<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class CurrencyChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @param array $datasets
     * @param array $labels
     */
    public function __construct($datasets = [[]], $labels = [])
    {
        parent::__construct();

        $this->loader(false);

        $this->options([
            'maintainAspectRatio' => false,
            'legend' => [
                'display' => false,
            ],
            'scales' => [
                'yAxes' => [
                    [
                        'ticks' => [
                            'maxTicksLimit' => 6,
                            'beginAtZero'   => false,
                        ],
                    ],
                ],
                'xAxes' => [
                    [
                        'display' => true,
                    ],
                ],
            ],
        ]);

        $this->labels($labels);

        $this->dataset("Bitcoin Price Index (USD)", "line", $datasets[0])->options([
            'backgroundColor'           => 'rgb(127,156,245, 0.4)',
            'borderColor'               => '#7F9CF5',
            'pointBackgroundColor'      => 'rgb(255, 255, 255, 0)',
            'pointBorderColor'          => 'rgb(255, 255, 255, 0)',
            'pointHoverBackgroundColor' => '#7F9CF5',
            'pointHoverBorderColor'     => '#7F9CF5',
            'borderWidth'               => 1,
            'pointRadius'               => 1,
        ]);
    }
}

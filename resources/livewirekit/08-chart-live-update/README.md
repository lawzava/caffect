## Livewire Kit: Chart with Live Update

This is a component to show the chart which would update every 5 seconds with wire:poll, showing current Bitcoin price in dollars.

### Files of the Component

- app/Charts/CurrencyChart.php
- app/Http/Livewire/Chart.php
- resources/views/livewire/tailwind/chart.blade.php
- resources/views/livewire/bootstrap/chart.blade.php
- composer.json (to install charts Laravel package)

### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Chart.php`, `app/Charts/CurrencyChart.php` and `resources/views/livewire/chart.blade.php` into your own project
- Add `"consoletvs/charts": "6.*"` to your `composer.json` and run `composer update`
- In Blade file(s), wherever you need to use this component, call it with `@livewire('chart')`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
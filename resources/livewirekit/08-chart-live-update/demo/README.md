## Livewire Kit: Chart with Live Update

### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Charts/CurrencyChart.php
- app/Http/Livewire/Chart.php
- resources/views/livewire/tailwind/chart.blade.php
- resources/views/livewire/bootstrap/chart.blade.php
- composer.json (to install charts Laravel package)
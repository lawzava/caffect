## Livewire Kit: Multi-Step Form

This is a component to show the example of tab-based form, consisting of a few steps, where you can't move to the next step before finishing the current one.

### Files of the Component

- app/Http/Livewire/MultiStepForm.php
- app/Models/Country.php
- app/Models/City.php
- resources/views/livewire/multi-step-form.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/MultiStepForm.php` and `resources/views/livewire/multi-step-form.blade.php` into your own project where you need to show the list of products
- In Blade file(s), wherever you need to use this component, call it with `@livewire('multi-step-form')` 
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
## Livewire Kit: E-Shop Catalog with Sidebar Filters

This is a component to show the example of two Livewire components: one for Sidebar filters, and one for list of items.


### Files of the Component

- app/Http/Livewire/Products.php
- app/Http/Livewire/Sidebar.php
- app/Models/Product.php
- app/Models/Category.php
- app/Models/Manufacturer.php
- resources/views/livewire/products.blade.php
- resources/views/livewire/sidebar.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Products.php` and `resources/views/livewire/products.blade.php` into your own project
- Copy files `app/Http/Livewire/Sidebar.php` and `resources/views/livewire/sidebar.blade.php` into your own project
- In Blade file(s), wherever you need to use this component, call it with `@livewire('sidebar')` and `@livewire('products')`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
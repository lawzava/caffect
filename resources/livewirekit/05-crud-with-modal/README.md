## Livewire Kit: CRUD with Edit Modal Window

This is a component to show a very simple CRUD with editing in modal.


### Files of the Component

- app/Http/Livewire/Products.php
- app/Models/Product.php
- resources/views/livewire/products.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Products.php` and `resources/views/livewire/products.blade.php` into your own project
- In file `app/Http/Livewire/Products.php` check the models and DB queries used, adapt to your DB structure
- If needed, run/modify migrations for `products` DB table, located in `database/migrations` folder.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('products')` 
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
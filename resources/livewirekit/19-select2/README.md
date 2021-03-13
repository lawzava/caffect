## Livewire Kit: Select2 in Livewire

This is a component to show the example of jQuery Select2 library


### Files of the Component

- app/Http/Livewire/ProductCreate.php 
- app/Models/Product.php
- app/Models/Category.php
- resources/views/livewire/tailwind/product-create.blade.php
- resources/views/livewire/bootstrap/product-create.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/ProductCreate.php` and `resources/views/livewire/product-create.blade.php` into your own project
- In your main layout file, make sure to load jQuery and Select2, and have `@stack('scripts')` - look at the example in `resources/views/tailwind.blade.php` or `resources/views/bootstrap.blade.php`
- Add/modify your own fields and models, instead of the example Product/Category, or maybe rename the full component.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('product-create')`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
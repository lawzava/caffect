## Livewire Kit: Bulk Edit in Modal

This is a component to show the example of bulk-editing records in modal window.


### Files of the Component

- app/Http/Livewire/Products.php (notice: it uses PHP 7.4+ syntax!)
- app/Models/Product.php
- app/Models/ProductCategory.php
- resources/views/livewire/tailwind/products.blade.php
- resources/views/livewire/bootstrap/products.blade.php
- __Notice__: Tailwind version uses Alpine.js for opening modal window, it's included in Blade's Header


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Products.php` and `resources/views/livewire/products.blade.php` into your own project
- Add/modify your own fields of your table and form, instead of the example name/category/price, or maybe renamd the full component.
- In Blade file(s), wherever you need to use this component, call it with `@livewire('products')`, or replace `products` with the new name of your component, like `articles`
- If you use Tailwind version, make sure to include Alpine.js from CDN in your Blade. [Read the Alpine.js docs here](https://github.com/alpinejs/alpine)
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
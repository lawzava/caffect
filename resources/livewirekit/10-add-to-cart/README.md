## Livewire Kit: Add to Cart/Wishlist

This is a component to show the example of events between two Livewire components: by clicking Add to Cart in one component, you emit the event in another component for Cart Count.


### Files of the Component

- app/Http/Livewire/Products.php
- app/Http/Livewire/Cart.php
- app/Models/Product.php
- app/Models/Cart.php
- resources/views/livewire/products.blade.php
- resources/views/livewire/cart.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Products.php` and `resources/views/livewire/products.blade.php` into your own project where you need to show the list of products
- Copy files `app/Http/Livewire/Cart.php` and `resources/views/livewire/cart.blade.php` into your own project where you need to show the list of products
- In Blade file(s), wherever you need to use this component, call it with `@livewire('products')` for the list, and `@livewire('cart')` for the cart counter.
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 
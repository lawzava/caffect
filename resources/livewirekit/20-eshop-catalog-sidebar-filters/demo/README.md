## Livewire Kit: E-Shop Listing with Sidebar Filters


### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Http/Livewire/Products.php
- app/Http/Livewire/Sidebar.php
- app/Models/Product.php
- app/Models/Category.php
- app/Models/Manufacturer.php
- resources/views/livewire/tailwind/products.blade.php
- resources/views/livewire/bootstrap/products.blade.php
- resources/views/livewire/tailwind/sidebar.blade.php
- resources/views/livewire/bootstrap/sidebar.blade.php

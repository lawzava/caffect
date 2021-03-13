## Livewire Kit: Bulk Delete

### Requirements

- This component uses PHP 7.4+ syntax, so you need at least PHP 7.4 version


### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Http/Livewire/Products.php
- app/Models/Product.php
- app/Models/ProductCategory.php
- resources/views/livewire/tailwind/products.blade.php
- resources/views/livewire/bootstrap/products.blade.php

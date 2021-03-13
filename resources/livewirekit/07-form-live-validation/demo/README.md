## Livewire Kit: Form Live-Validation

### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL and try to enter data in the form - product name shorter than 3 characters or product description shorter than 50 characters
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Http/Livewire/ProductForm.php
- app/Models/Product.php
- resources/views/livewire/tailwind/product-form.blade.php
- resources/views/livewire/bootstrap/product-form.blade.php


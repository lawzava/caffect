## Livewire Kit: Create Invoice


### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Http/Livewire/InvoiceCreate.php
- app/Models/Product.php
- app/Models/Invoice.php
- resources/views/livewire/tailwind/invoice-create.blade.php
- resources/views/livewire/bootstrap/invoice-create.blade.php

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Barbie',
            'price' => 19.99,
        ]);
        Product::create([
            'name' => 'Lego',
            'price' => 49.99,
        ]);
        Product::create([
            'name' => 'iPhone',
            'price' => 1099.99,
        ]);
        Product::create([
            'name' => 'Samsung Galaxy Buds',
            'price' => 199.99,
        ]);
    }
}

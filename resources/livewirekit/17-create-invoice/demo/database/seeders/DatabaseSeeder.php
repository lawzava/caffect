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
        Product::create(['name' => 'iPad', 'price' => 199.99]);
        Product::create(['name' => 'iPhone', 'price' => 1999.99]);
        Product::create(['name' => 'iMac', 'price' => 19999.99]);
    }
}

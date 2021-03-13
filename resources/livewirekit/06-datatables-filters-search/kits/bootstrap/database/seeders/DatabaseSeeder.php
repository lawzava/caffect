<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
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
        ProductCategory::create(['name' => 'Toys']);
        ProductCategory::create(['name' => 'Gadgets']);

        Product::create([
            'name' => 'Barbie',
            'description' => 'Best doll',
            'price' => 19.99,
            'product_category_id' => 1
        ]);
        Product::create([
            'name' => 'Lego',
            'description' => 'Best constructor',
            'price' => 49.99,
            'product_category_id' => 1
        ]);
        Product::create([
            'name' => 'iPhone',
            'description' => 'Apple phone',
            'price' => 1099.99,
            'product_category_id' => 2
        ]);
        Product::create([
            'name' => 'Samsung Galaxy Buds',
            'description' => 'Best Earphones',
            'price' => 199.99,
            'product_category_id' => 2
        ]);
        Product::create([
            'name' => 'Macbook Pro',
            'description' => 'Best Computer',
            'price' => 2999.99,
            'product_category_id' => 2
        ]);
        Product::create([
            'name' => 'Google Home',
            'description' => 'Home assistant',
            'price' => 29.99,
            'product_category_id' => 2
        ]);
    }
}

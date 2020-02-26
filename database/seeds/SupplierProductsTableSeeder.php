<?php

use Illuminate\Database\Seeder;

class SupplierProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $products = \App\Product::all()->pluck('id')->toArray();
        $suppliers = \App\Supplier::all()->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            \App\SupplierProduct::create([
                'supply_id' => $faker->randomElement($suppliers),
                'product_id' => $faker->randomElement($products)
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
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
        // get orders to enforce foreign keys
        $orders = \App\Order::all()->pluck('id')->toArray();
        $products = \App\Product::all()->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            \App\OrderDetail::create([
                'order_id' => $faker->randomElement($orders),
                'product_id' => $faker->randomElement($products)
            ]);
        }
    }
}

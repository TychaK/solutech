<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            \App\Product::create([
                'name' => $faker->text(45),
                'description' => $faker->text(45),
                'quantity' => $faker->randomNumber(2),
            ]);
        }
    }
}

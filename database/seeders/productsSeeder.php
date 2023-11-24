<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\Models\Product;
use Faker\Factory as Faker;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();
       
        // $product->image = $faker->image;
        // $product->name = $faker->name;
        // $product->description = $faker->description;
        // $product->save();

        for($i = 1; $i <= 5; $i++)
        {
        $product = new Product;
        $product->image = '1700690025.jpg';
        $product->name = 'hello';
        $product->description = 'abc';
        $product->save();
        }  

       
    }
}

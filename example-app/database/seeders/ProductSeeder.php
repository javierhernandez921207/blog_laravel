<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = "Product 1";
        $product->price = 5;
        $product->save();
        $product = new Product();
        $product->name = "Product 2";
        $product->price = 10;
        $product->save();
        $product = new Product();
        $product->name = "Product 3";
        $product->price = 15;
        $product->save();
        $product = new Product();
        $product->name = "Product 4";
        $product->price = 545;
        $product->save();
        $product = new Product();
        $product->name = "Product 5";
        $product->price = 345;
        $product->save();
        $product = new Product();
        $product->name = "Product 6";
        $product->price = 25;
        $product->save();
        $product = new Product();
        $product->name = "Product 7";
        $product->price = 15;
        $product->save();
        $product = new Product();
        $product->name = "Product 8";
        $product->price = 915;
        $product->save();
        $product = new Product();
        $product->name = "Product 9";
        $product->price = 195;
        $product->save();
        $product = new Product();
        $product->name = "Product 10";
        $product->price = 185;
        $product->save();
        $product = new Product();
        $product->name = "Product 11";
        $product->price = 145;
        $product->save();
        $product = new Product();
        $product->name = "Product 12";
        $product->price = 215;
        $product->save();
        $product = new Product();
        $product->name = "Product 13";
        $product->price = 150;
        $product->save();
        $product = new Product();
        $product->name = "Product 14";
        $product->price = 115;
        $product->save();
        $product = new Product();
        $product->name = "Product 15";
        $product->price = 145;
        $product->save();
        $product = new Product();
        $product->name = "Product 16";
        $product->price = 135;
        $product->save();
        $product = new Product();
        $product->name = "Product 17";
        $product->price = 125;
        $product->save();
    }
}

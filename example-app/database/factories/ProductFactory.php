<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = "Product ".$this->faker->numberBetween(0,1000);
        return [
            'name' => $name,
            'slug' => Str::slug($name,'-'),
            'price' => $this->faker->numberBetween(10,100)
        ];
    }
}

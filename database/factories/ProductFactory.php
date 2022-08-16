<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->unique()->randomDigit(1,1000),
            'size' => $this->faker->randomDigitNot(4,5,6,7,8,9,0),
            'color' => $this->faker->colorName,
            'amount' => $this->faker->randomDigitNotNull,
        ];
    }
}

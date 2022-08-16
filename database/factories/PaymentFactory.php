<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Array to string
        $orderStatus = implode(
            $this->faker->randomElements(
                $array = array(
                    "pack",
                    "delivery",
                    "achieve"
                )
            )
        );

        return [
            'orderPrice' => $this->faker->numberBetween(10000,20000),
            'orderStatus' => $orderStatus
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Array to string *不清楚如何建json假資料
        $orderInfo = json_encode(
            $this->faker->randomElements(
                $array = array(
                    ['product_id' => '1',
                    'amount' => '20'],
                    ['product_id' => '2',
                    'amount' => '3'],
                )
            )
        )."\n";

        return [
            'payment_id' => $this->faker->unique()->ean8,
            'user_id' => $this->faker->randomDigit(),
            'orderInfo' => $this->$orderInfo
        ];
    }
}

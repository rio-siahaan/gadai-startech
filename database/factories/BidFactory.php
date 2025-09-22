<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    return [
        'harga_bid' => $this->faker->randomDigit(),
        'lelang_id' => $this->faker->randomDigit(),
        'user_id' => $this->faker->randomDigit(),
        ];
    }
}

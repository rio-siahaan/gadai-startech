<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LelangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gadai_id' => $this->faker->numberBetween(1,10),
            'harga_awal' => rand(500000,10000000),
            'deadline'=> $this->faker->dateTime(),
            'is_done' => $this->faker->boolean(),
        ];
    }
}

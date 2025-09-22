<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GadaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->sentence(),
            'kelengkapan'=> $this->faker->sentence(3),
            'serial_number'=> rand(1,10),
            'Deskripsi'=> $this->faker->sentence(3),
            'user_id' => rand(1,10),
            'admin_id' => rand(1,10),
            'pinjaman' => rand(500000,10000000),
            'bunga'=> rand(1,10)/10,
            'durasi'=> $this->faker->dateTime(),
            'kategori' => $this->faker->randomElement(['perhiasan','elektronik','kendaraan', 'lainnya']),
            'status' => $this->faker->randomElement(['gadai','lelang']),
            'is_done'=> $this->faker->boolean(),
        ];
    }
}

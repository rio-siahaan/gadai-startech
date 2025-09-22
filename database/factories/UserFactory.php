<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nik"=> rand(1000000000000000,9999999999999999),
            'nama' => $this->faker->name,
            'telepon' => $this->faker->unique()->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail,
            'provinsi'=> rand(11,16),
            'kabupatenkota'=> rand(11,200),
            'alamat' => $this->faker->address(),
            'cabang_id'=> rand(1,16),
            'jabatan'=> $this->faker->jobTitle(),
            'password' => '$2y$10$9f.1hEGcRdjzfcfCxgckYuJSjBaO3YoEgQ2W8M87MChKPOIMkI5h.', // 1234
            'role' =>'user',
            'status' => 'verified',
            'remember_token' => Str::random(10),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class AdressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2,
            'city' => $this -> fake()->city,
            'district' => $this -> fake()->city,
            'zipcode' => $this -> fake()->randomDigitNotZero(),
            'address' => $this -> fake()->address,
            'is_default' => $this -> fake()->boolean()
        ];
    }
}

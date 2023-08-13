<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->lastName(),
            'last_name' => fake()->lastName(),
            'birthdate' => fake()->date(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'card_number' => fake()->creditCardNumber(),
            'email' => fake()->safeEmail(),
            'house_no' => fake()->buildingNumber(),
            'barangay' => fake()->streetAddress(),
            'city_municipality' => fake()->city(),
            'province' => fake() -> citySuffix(),
            'member' => fake() -> randomElement(['Student', 'Faculty']),
            'password' => bcrypt(fake() -> phoneNumber())

        ];
    }
}

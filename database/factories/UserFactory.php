<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'province' => fake()->citySuffix(),
            'user_type' => fake()->randomElement(['Student', 'Faculty']),
            'password' => bcrypt(fake()->phoneNumber())
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

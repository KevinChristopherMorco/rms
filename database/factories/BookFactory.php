<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nbWords = 6;
        return [
            'title'=>fake()->catchPhrase(),
            'author'=>fake()->name(),
            'isbn'=>fake()->ean13(),
            'date_published'=>fake()->date(),
            'genre'=> fake()-> randomElement(['Horror', 'Fantasy', 'Mystery', 'Thriller', 'Science', 'Mathematics', 'History', 'Biography/Authobiography', 'Cookbook', 'Religious/Spiritual', 'Comics', 'Poetry']),
            'description'=>fake()->sentence($nbWords),


        ];
    }
}

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
            'book_image'=>fake()->imageUrl(640,480),
            'college' => fake()->randomElement([
                'College of Engineering and Technology',
                'College of Industrial Technology',
                'College of Business Management and Accountancy',
                'College of Teacher Education',
                'College of Computer Studies',
                'College of Criminal Justice Education',
                'College of Arts and Sciences',
                'College of Nursing and Allied Health',
                'College of Hospitality Management and Tourism',
            ]),
        ];
    }
}

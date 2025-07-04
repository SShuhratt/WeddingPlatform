<?php

namespace Database\Factories;

use App\Models\Book;
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
        return [
            'title'       => $this->faker->sentence(),
            'author'      => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'price'       => $this->faker->randomNumber(2),
            'image_url'   => $this->faker->imageUrl(),
            'url'         => $this->faker->url(),
        ];
    }
}

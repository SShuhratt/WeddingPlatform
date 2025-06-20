<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => $this->faker->name(),
            'description'   => $this->faker->paragraph(),
            'address'       => $this->faker->address(),
            'location_url'  => $this->faker->url(),
            'price'         => $this->faker->randomNumber(2),
            'image_url'     => $this->faker->imageUrl(),
            'capacity'      => $this->faker->randomNumber(2),
            'url'           => $this->faker->url(),
        ];
    }
}

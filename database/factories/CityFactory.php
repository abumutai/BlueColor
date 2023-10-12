<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'county_id' => $this->faker->numberBetween(1, 10), // Example of generating a random number between 1 and 10
            'name' => $this->faker->city, // Generate a random city name
            'user_id' => $this->faker->numberBetween(1, 10), // Example of generating a random user ID
            'created_at' => now()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movies;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movies>
 */
class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
            'title' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'description' => $this->faker->text,
            'uuid' => $this->faker->unique()->uuid,
            'score' => $this->faker->randomFloat(1, 1, 10),
            'duration' => $this->faker->numberBetween(1, 240)
        ];


    }
}

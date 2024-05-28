<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\stagiaire>
 */
class stagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'nom de famille' => fake()->firstName(),
                'email' => fake()->unique()->safeEmail(),
                'prenom'=>fake()->lastName(),
                'photo'=>fake()->url(),


        ];
    }
}

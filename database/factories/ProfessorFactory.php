<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'firstName' => fake()->firstname(),
                'lastName' => fake()->lastname(),
                'gender' => fake()->randomElement(['Male', 'Female']),
                'email' => fake()->safeEmail(),

        ];
    }
}

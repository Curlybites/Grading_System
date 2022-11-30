<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subjectName' => fake()->name(),
            'subjectCode' => fake()->numerify(),
            'subjectUnit' => fake()->numerify($min=1,$max=10),
        ];
    }
}

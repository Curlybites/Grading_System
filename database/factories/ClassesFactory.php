<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'class_name' => fake()->class_name(),
                'class_num' => fake()->numerify('22-###'),
                'class_sec' => fake()->class_sec()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'average_score_improvement' => random_int(0, 100),
            'homework_completion_rate' => random_int(0, 100),
            'attendance_rate' => random_int(0, 100),
        ];
    }
}

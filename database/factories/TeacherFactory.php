<?php

namespace Database\Factories;

use App\Models\Teacher;
use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name()
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Teacher $teacher) {
            $teacher->teacherActivity()->create();
        });
    }
}

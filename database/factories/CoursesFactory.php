<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_name' => fake()->words(3, true), //"Introduction to Laravel")
            'course_index' => strtoupper(fake()->bothify('???###')), //"ABC123")
            'course_description' => fake()->paragraph(), //fake course description
        ];
    }
}

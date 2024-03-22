<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "uuid" => uuid_create(),
            'course_name' => $this->faker->sentence(),
            'course_start_date' => $this->faker->dateTime(),
            'course_modality' => $this->faker->randomElement(["virtual", "presencial"]),
            'course_duration' => '24 Horas', // Siempre 24 Horas según tu seeder original
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'due_date' => fake()->dateTimeBetween('now', '+1 year'),
            'description' => fake()->sentence(50),
            'status' => fake()->randomElement(['pending', 'in_progress', 'completed']),
            'image_path' => fake()->imageUrl(),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ];
    }
}

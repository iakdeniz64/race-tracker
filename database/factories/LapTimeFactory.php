<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LapTime>
 */
class LapTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lap_time' => round($this->faker->numberBetween(95000, 200000) / 1000, 3),
            'is_valid' => $this->faker->boolean(95),
        ];
    }
}

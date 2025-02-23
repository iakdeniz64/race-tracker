<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    public const MODELS = [
        'Aston Martin Vantage AMR GT3 Evo',
        'Audi R8 LMS GT3 Evo II',
        'BMW M4 GT3',
        'Ferrari 296 GT3',
        'Ferrari 488 GT3 Evo',
        'Ford Mustang GT3',
        'Lamborghini Huracan GT3 Evo',
        'Lamborghini Huracan GT3 Evo2',
        'McLaren 720S GT3 Evo',
        'Mercedes-AMG GT3 Evo',
        'Porsche 911 GT3 R (992)',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numberBetween(1, 999),
            'driver' => $this->faker->name(),
            'model' => array_rand(array_flip(static::MODELS)),
            'team' => $this->faker->company(),
            'color' => $this->faker->safeHexColor(),
        ];
    }
}

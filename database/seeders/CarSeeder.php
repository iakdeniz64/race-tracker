<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Database\Factories\CarFactory;
use Database\Factories\LapTimeFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        CarFactory::new()
            ->count(30)
            ->afterCreating(function (Car $car) {
                LapTimeFactory::new()
                    ->count(10)
                    ->sequence(
                        fn(Sequence $sequence) => [
                            $car->getForeignKey() => $car->getKey(),
                            'lap_number' => $sequence->count() + 1,
                        ],
                    )
                    ->createMany();
            })
            ->create();
    }
}

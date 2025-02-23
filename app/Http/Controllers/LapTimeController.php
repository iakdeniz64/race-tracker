<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLapTimeRequest;
use App\Models\Car;
use Illuminate\Http\JsonResponse;

class LapTimeController
{
    /** Store a new lap time for a given car. */
    public function store(StoreLapTimeRequest $request, Car $car): JsonResponse
    {
        $validated = $request
            ->safe()
            ->only(['lap_time', 'is_valid']);

        $car->lapTimes()->create([
            'car_id' => $car->id,
            'lap_time' => round($validated['lap_time'], 3),
            'is_valid' => (bool) $validated['is_valid'],
        ]);

        return (new CarController)->show($car);
    }
}

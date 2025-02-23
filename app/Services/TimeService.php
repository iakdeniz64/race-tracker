<?php

namespace App\Services;

/**
 * Service for doing calculations on time values.
 */
class TimeService
{
    /**
     * Calculate the average time from an array of times.
     *
     * @param array $times Array of lap times in seconds
     * @return string Average lap time
     */
    public static function calculateAverage(array $times): float
    {
        return empty($times)
            ? round(0.0, 3)
            : round(array_sum($times) / count($times), 3);
    }
}

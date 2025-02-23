<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LapTime extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'car_id',
        'lap_time',
        'is_valid',
    ];

    protected $casts = [
        'is_valid' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lapTime) {
            $lapTime->lap_number = static::where('car_id', $lapTime->car_id)->max('lap_number') + 1 ?? 1;
        });
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

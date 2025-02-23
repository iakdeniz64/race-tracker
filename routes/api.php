<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LapTimeController;
use Illuminate\Support\Facades\Route;

Route::get('/car/{car}', [CarController::class, 'show']);
Route::get('/car', [CarController::class, 'index']); // dit is de index() functie in app/Http/Controllers/CarController.php

Route::post('/laptime/{car}', [LapTimeController::class, 'store']);

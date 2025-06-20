<?php

use App\Http\Controllers\Api\V1\BookApiController;
use App\Http\Controllers\Api\V1\ServiceApiController;
use App\Http\Controllers\Api\V1\VenueApiController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookApiController::class);
Route::apiResource('services', ServiceApiController::class);
Route::apiResource('venues', VenueApiController::class);

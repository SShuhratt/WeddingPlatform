<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('books', BookController::class);
Route::resource('services', ServiceController::class);
Route::resource('venues',   VenueController::class);


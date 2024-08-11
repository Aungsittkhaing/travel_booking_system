<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JourneyController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('category', CategoryController::class);
Route::resource('journey', JourneyController::class);

//searching journey
Route::get('/search', [JourneyController::class, 'search'])->name('journey.search');

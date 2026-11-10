<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// halaman login
Route::get('/', [PageController::class, 'login']);

// membaca username dari form login
Route::post('/login', [PageController::class, 'prosesLogin']);

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);

Route::get('/profile', [PageController::class, 'profile']);

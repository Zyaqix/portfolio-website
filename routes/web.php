<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\InfoPersonalController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/about', [InfoPersonalController::class, 'index']);
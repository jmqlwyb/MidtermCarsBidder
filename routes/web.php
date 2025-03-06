<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::get('/bidders', [BidderController::class, 'index']);


Route::get('/cars', [CarController::class, 'index']);


Route::get('/layout', function () {
    return Inertia::render('MainLayout');
});

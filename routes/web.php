<?php

use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/bidders', [BidderController::class, 'index']);

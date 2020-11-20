<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;

Route::get('/', WelcomeController::class);

Route::get('/products/{product}', [ProductController::class, 'show']);

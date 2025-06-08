<?php

use Illuminate\Support\Facades\Route;
use LaravelPackaging\Http\Controllers\MinifyController;

Route::get('/minify-test', [MinifyController::class, 'index']);
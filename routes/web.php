<?php

use Illuminate\Support\Facades\Route;
use LaravelPackaging\Http\Controllers\MinifyController;

Route::get('/package-minify', [MinifyController::class, 'index']);
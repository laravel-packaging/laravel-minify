<?php

use Illuminate\Support\Facades\Route;
use LaravelPackaging\Http\Controllers\MinifyController;

Route::get('/minify-test/{input}', [MinifyController::class, 'index']);
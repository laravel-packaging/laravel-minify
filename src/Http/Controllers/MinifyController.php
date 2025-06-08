<?php

namespace LaravelPackaging\Http\Controllers;

use Illuminate\Routing\Controller;

class MinifyController extends Controller
{
    public function index()
    {
        return view('minify::index');
    }
}

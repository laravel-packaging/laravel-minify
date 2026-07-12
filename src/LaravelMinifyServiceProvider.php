<?php

namespace LaravelPackaging;

use Illuminate\Support\ServiceProvider;

class LaravelMinifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'minify');
        $this->mergeConfigFrom(__DIR__.'/../config/minify.php', 'minify');

        $this->publishes([
            __DIR__.'/../config/minify.php' => config_path('minify.php'),
        ], 'config');
    }

    public function register()
    {
        // Register bindings if needed
    }
}
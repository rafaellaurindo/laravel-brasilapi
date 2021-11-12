<?php

namespace RafaelLaurindo\BrasilApi;

use Illuminate\Support\ServiceProvider;

class BrasilApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/brasil-api.php' => config_path('brasil-api.php'),
            ], 'config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/brasil-api.php', 'brasil-api');

        $this->app->singleton(BrasilApi::class, fn () => new BrasilApi(config('brasil-api.base_url')));
        $this->app->alias(BrasilApi::class, 'laravel-brasilapi');
    }
}

<?php

namespace Karabulutmehmet\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Karabulutmehmet\Calculator\CalculatorController');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/karabulutmehmet/calculator'),
        ]);
    }
}

<?php

namespace MisterDev\Laracheck;

use Illuminate\Support\ServiceProvider;

class LaracheckServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laracheck.php'),
            ], 'laracheck-config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laracheck');

        $this->app->singleton('laracheck', function () {
            return new Laracheck();
        });
    }
}

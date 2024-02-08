<?php

namespace SalamWaddah\LaravelCanonical;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CanonicalServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/canonical.php', 'canonical');
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        // this will be a nice feature but I need to find out how to avoid blade cache
        // Blade::directive('canonical', function () {
        //     $c = canonical();
        //     return "<link rel=\"canonical\" href=\"$c\">";
        // });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/canonical.php' => config_path('canonical.php'),
            ], 'config');
        }
    }
}

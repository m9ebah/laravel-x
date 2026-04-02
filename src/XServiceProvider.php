<?php

namespace Nawaf\LaravelX;

use Illuminate\Support\ServiceProvider;
class XServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/x.php', 'x');
        $this->publishes([
            __DIR__.'/../config/x.php' => config_path('x.php'),
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('x', function () {

            return new X();
        });
    }
}

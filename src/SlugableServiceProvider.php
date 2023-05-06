<?php

namespace Hellohasan\LaravelSlugable;

use Illuminate\Support\ServiceProvider;

class SlugableServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('laravel-slugable', function ($app) {
            return new \Hellohasan\LaravelSlugable\Slugable ();
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../config/slugable.php', 'slugable'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/slugable.php' => config_path('slugable.php'),
        ]);
    }
}

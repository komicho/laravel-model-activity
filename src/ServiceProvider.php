<?php

namespace Komicho\Laravel\UserActivity;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../laravel/publishes/config/user_activity.php' => config_path('komicho/user_activity.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
<?php

namespace Lyue\LaravelJwt;


use Illuminate\Support\ServiceProvider;

class JwtProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__.'/jwt_config.php';
        $this->publishes([
            $configPath => config_path('jwt.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Jwt', function ($app) {
            return new Jwt($app);
        });
    }
}

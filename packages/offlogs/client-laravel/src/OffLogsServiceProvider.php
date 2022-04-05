<?php

namespace Offlogs\ClientLaravel;

use Illuminate\Support\ServiceProvider;
use Offlogs\ClientLaravel\Logging\LoggerFactory;

class OffLogsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->make('config')->set('logging.channels.offlogs', [
            'driver' => 'custom',
            'via' => LoggerFactory::class,
            'level' => env('LOG_LEVEL', 'debug'),
        ]);

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'offlogs');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'offlogs');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/offlogs.php', 'offlogs');

        // Register the service the package provides.
        $this->app->singleton('offlogs', function ($app) {
            return new OffLogsService;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['offlogs'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/offlogs.php' => config_path('offlogs.php'),
        ], 'offlogs.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/offlogs'),
        ], 'client-laravel.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/offlogs'),
        ], 'client-laravel.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/offlogs'),
        ], 'client-laravel.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

<?php

namespace Edrmtz01\LaravelJetSpanish;

use Edrmtz01\LaravelJetSpanish\Console\InstallJetSpanishPackage;
use Illuminate\Support\ServiceProvider;

class LaravelJetSpanishServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Publishing the translation files.
        $this->publishes([
            __DIR__ . '/../lang/' => $this->app->langPath(),
        ], 'lang');

        if ($this->app->runningInConsole()) {
            // Registering package commands.
            $this->commands([InstallJetSpanishPackage::class]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-jet-spanish', function () {
            return new LaravelJetSpanish;
        });
    }
}

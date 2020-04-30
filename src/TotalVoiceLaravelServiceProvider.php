<?php

namespace Aiqfome\TotalVoiceLaravel;

use Illuminate\Support\ServiceProvider;
use TotalVoice\Client as TotalVoiceClient;

class TotalVoiceLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/totalvoice.php' => config_path('totalvoice.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/totalvoice.php', 'totalvoice');

        // Register the main class to use with the facade
        $this->app->singleton(TotalVoiceClient::class, function () {
            return new TotalVoiceClient(
                config('totalvoice.token'),
                config('totalvoice.base_uri')
            );
        });

        $this->app->bind('totalvoice', TotalVoiceClient::class);
    }

    public function provides()
    {
        return ['totalvoice', TotalVoiceClient::class];
    }
}

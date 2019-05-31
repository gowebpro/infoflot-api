<?php

namespace Gowebpro\Infoflot;

use Illuminate\Support\ServiceProvider;

class InfoflotServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('infoflot', function () {
            return new InfoflotApi(config('services.infoflot.key'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['infoflot'];
    }
}

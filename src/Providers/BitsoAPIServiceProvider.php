<?php

namespace ElMictlan\BitsoPlugin\Providers;

use Illuminate\Support\ServiceProvider;

class BitsoAPIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BitsoAPI', function (){
        	return new \ElMictlan\BitsoPlugin\BitsoAPI();
        });
    }
}
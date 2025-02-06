<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off')
            define('BASE','http://'.$_SERVER['HTTP_HOST'].'/');
        else
            define('BASE', 'https://'.$_SERVER['HTTP_HOST'].'/');
    }
}

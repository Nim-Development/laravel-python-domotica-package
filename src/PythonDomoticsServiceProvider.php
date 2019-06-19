<?php

namespace NimDevelopment\PythonDomotics;

use Illuminate\Support\ServiceProvider;
use NimDevelopment\PythonDomotics\Classes\PythonDomotics;

class PythonDomoticsServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('python.domotics', function(){
            return new PythonDomotics;
        });
    }
}
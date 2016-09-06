<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('username', function($attribute, $value, $parameters, $validator) {
            if(! is_string($value) && ! is_numeric($value)) {
                return false;
            }

            return preg_match('/^[a-zA-Z0-9_-]+$/u', $value) > 0;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

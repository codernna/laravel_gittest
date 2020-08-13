<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SampleProvider extends ServiceProvider
{
    /**ss
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('test', function(){
    return new \App\test(config('mymailservice.testkey.key'));
       });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

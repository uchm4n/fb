<?php


use Illuminate\Support\ServiceProvider;
use Ucha19871\FB\FB;

class FBServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fb', function()
        {
            return new FB;
        });
    }
}

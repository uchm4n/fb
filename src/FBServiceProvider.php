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

        $this->app->bind('FB', function()
        {
            return new FB;
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('FB', 'Ucha19871\FB\Facades\FBFacades');
        });

    }
}

<?php


namespace Ucha19871\FB\Facades;


use Illuminate\Support\Facades\Facade;

class FBFacades extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'fb';
    }

}
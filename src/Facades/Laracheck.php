<?php

namespace MisterDev\Laracheck\Facades;

use Illuminate\Support\Facades\Facade;

class Laracheck extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laracheck';
    }
}

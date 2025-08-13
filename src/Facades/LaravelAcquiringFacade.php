<?php

declare(strict_types=1);

namespace Monobank\LaravelAcquiring\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelAcquiringFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'monobank-acquiring';
    }
}
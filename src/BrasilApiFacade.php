<?php

namespace RafaelLaurindo\BrasilApi;

use Illuminate\Support\Facades\Facade;

class BrasilApiFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-brasilapi';
    }
}

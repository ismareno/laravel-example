<?php

namespace Ismareno\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ismareno\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ismareno\Example\Example::class;
    }
}

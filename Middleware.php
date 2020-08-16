<?php

namespace Pantheion\Facade;

use Pantheion\Middleware\Handler as MiddlewareRootClass;

class Middleware extends Facade
{
    protected static function accessor()
    {
        return MiddlewareRootClass::class;
    }
}

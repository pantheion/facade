<?php

namespace Pantheion\Facade;

use Pantheion\Middleware\Handler as MiddlewareRootClass;

/**
 * @method static \Pantheion\Http\Response handle(Request $request, Route $route, \Closure $top)
 */
class Middleware extends Facade
{
    protected static function accessor()
    {
        return MiddlewareRootClass::class;
    }
}

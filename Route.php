<?php

namespace Pantheion\Facade;

use Pantheion\Routing\RouteMapper as RouteRootClass;

class Route extends Facade
{
    protected static function accessor()
    {
        return RouteRootClass::class;
    }
}

<?php

namespace Pantheion\Facade;

use Pantheion\Routing\RouteMapper as RouteRootClass;

/**
 * @method static \Pantheion\Routing\Route get(string $url, string $action)
 * @method static \Pantheion\Routing\Route post(string $url, string $action)
 * @method static \Pantheion\Routing\Route put(string $url, string $action)
 * @method static \Pantheion\Routing\Route patch(string $url, string $action)
 * @method static \Pantheion\Routing\Route delete(string $url, string $action)
 * @method static void group(array $options, \Closure $routes)
 */
class Route extends Facade
{
    protected static function accessor()
    {
        return RouteRootClass::class;
    }
}

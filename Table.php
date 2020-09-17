<?php

namespace Pantheion\Facade;

use Pantheion\Database\Table\Manager as ManagerRootClass;

/**
 * @method static \Pantheion\Database\Table\Table create(string $table, \Closure $schematic)
 * @method static boolean exists(string $table)
 * @method static \Pantheion\Database\Table\Table use(string $table)
 * @method static \Pantheion\Database\Table\Table[] all(bool $pivots, array $except)
 * @method static void drop(string $table)
 * 
 */
class Table extends Facade
{
    protected static function accessor()
    {
        return ManagerRootClass::class;
    }
}

<?php

namespace Pantheion\Facade;

use Pantheion\Database\Connection as ConnectionRootClass;

/**
 * @method static mixed execute(string $query, array $params = [])
 * @method static \Pantheion\Database\Connection setDialect(Sql $dialect)
 * @method static \Pantheion\Database\Dialect\Sql sql()
 */
class Connection extends Facade
{
    protected static function accessor()
    {
        return ConnectionRootClass::class;
    }
}

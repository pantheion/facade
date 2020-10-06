<?php

namespace Pantheion\Facade;

use Pantheion\Database\Manager as DatabaseRootClass;

/**
 * @method static \Pantheion\Database\Connection connect(array $options = null)
 */
class Database extends Facade
{
    protected static function accessor()
    {
        return DatabaseRootClass::class;
    }
}

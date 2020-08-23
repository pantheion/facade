<?php

namespace Pantheion\Facade;

use Pantheion\Database\Manager as DatabaseRootClass;

class Database extends Facade
{
    protected static function accessor()
    {
        return DatabaseRootClass::class;
    }
}

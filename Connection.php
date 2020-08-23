<?php

namespace Pantheion\Facade;

use Pantheion\Database\Connection as ConnectionRootClass;

class Connection extends Facade
{
    protected static function accessor()
    {
        return ConnectionRootClass::class;
    }
}

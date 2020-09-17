<?php

namespace Pantheion\Facade;

use Pantheion\Database\Table\Manager as ManagerRootClass;

class Table extends Facade
{
    protected static function accessor()
    {
        return ManagerRootClass::class;
    }
}

<?php

namespace Pantheion\Facade;

use Pantheion\Database\Migration\Manager as MigrationRootClass;

class Migration extends Facade
{
    protected static function accessor()
    {
        return MigrationRootClass::class;
    }
}

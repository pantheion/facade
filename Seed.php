<?php

namespace Pantheion\Facade;

use Pantheion\Database\Seed\Manager as SeedRootClass;

class Seed extends Facade
{
    protected static function accessor()
    {
        return SeedRootClass::class;
    }
}

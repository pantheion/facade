<?php

namespace Pantheion\Facade;

use Pantheion\Utils\Inflection as InflectionRootClass;

class Inflection extends Facade
{
    protected static function accessor()
    {
        return InflectionRootClass::class;
    }
}

<?php

namespace Pantheion\Facade;

use Pantheion\Utils\Arr as ArrRootClass;

class Arr extends Facade
{
    protected static function accessor()
    {
        return ArrRootClass::class;
    }
}
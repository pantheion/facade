<?php

namespace Pantheion\Facade;

use Pantheion\Utils\Str as StrRootClass;

class Str extends Facade
{
    protected static function accessor()
    {
        return StrRootClass::class;
    }
}

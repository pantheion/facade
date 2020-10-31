<?php

namespace Pantheion\Facade;

use Pantheion\Hashing\Hash as HashRootClass;

class Hash extends Facade
{
    protected static function accessor()
    {
        return HashRootClass::class;
    }
}

<?php

namespace Pantheion\Facade;

use Pantheion\Session\Session as SessionRootClass;

class Session extends Facade
{
    protected static function accessor()
    {
        return SessionRootClass::class;
    }
}

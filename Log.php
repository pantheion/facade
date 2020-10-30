<?php

namespace Pantheion\Facade;

use Pantheion\Logging\Manager as LogRootClass;

class Log extends Facade
{
    protected static function accessor()
    {
        return LogRootClass::class;
    }
}

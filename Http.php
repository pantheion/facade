<?php

namespace Pantheion\Facade;

use Pantheion\Http\Client\Client as HttpClientRootClass;

class Http extends Facade
{
    protected static function accessor()
    {
        return HttpClientRootClass::class;
    }
}

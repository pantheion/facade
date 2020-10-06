<?php

namespace Pantheion\Facade;

use Pantheion\Utils\Arr as ArrRootClass;

/**
 * @method static bool accessible($var)
 * @method static array add(array $array, string $key, $value)
 * @method static array collapse(array $arrayOfArrays)
 * @method static array divide(array $array)
 * @method static array except(array $array, string $except)
 * @method static bool empty(array $array)
 * @method static mixed first(array $array, \Closure $callback = null, $default = null)
 * @method static void forget(array &$array, string $key)
 * @method static mixed get(array $array, string $key)
 * @method static bool has(array $array, string $key)
 * @method static bool hasAll(array $array, array $keys)
 * @method static bool hasAny(array $array, array $keys)
 * @method static bool isAssoc(array $array)
 * @method static bool isMulti(array $arrayOfArrays)
 * @method static array merge(array ...$arrays)
 * @method static mixed last(array $array, \Closure $callback = null, $default = null)
 * @method static array only(array $array, array $keys)
 * @method static array prepend(array $array, $value, string $key = null)
 * @method static array pull(array &$array, string $key) 
 * @method static array random(array $array, int $times = null)
 * @method static array set(array $array, string $key, $value)
 * @method static array shuffle(array &$array)
 * @method static array slice(array $array, int $start, int $length)
 * @method static array sort(array &$array, $key = null) 
 * @method static array where(array $array, \Closure $where) 
 */
class Arr extends Facade
{
    protected static function accessor()
    {
        return ArrRootClass::class;
    }
}
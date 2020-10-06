<?php

namespace Pantheion\Facade;

use Pantheion\Utils\Str as StrRootClass;

/**
 * @method static string after(string $string, string $after)
 * @method static string afterLast(string $string, string $after)
 * @method static string append(string $string, string $append)
 * @method static string before(string $string, string $before)
 * @method static string beforeLast(string $string, string $before)
 * @method static string between(string $string, string $after, string $before)
 * @method static bool contains(string $string, string $contains)
 * @method static bool containsAll(string $string, array $all)
 * @method static bool containsAny(string $string, array $any)
 * @method static bool endsWith(string $string, string $end)
 * @method static bool isEmpty(string $string)
 * @method static bool isNotEmpty(string $string)
 * @method static bool isUuid(string $string)
 * @method static int length(string $string)
 * @method static string limit(string $string, int $limit, string $append = "...")
 * @method static string prepend(string $string, string $prepend)
 * @method static string random(int $length)
 * @method static string replaceArray(string $find, array $replace, string $string, int $count = null)
 * @method static string replaceFirst(string $find, string $replace, string $string)
 * @method static string replaceLast(string $find, string $replace, string $string)
 * @method static string slug(string $string, string $replace = '-')
 * @method static bool startsWith(string $string, string $start)
 * @method static string substr(string $string, int $start, int $length)
 * @method static string ucfirst(string $string)
 * @method static string uuid()
 * @method static string words(string $string, int $count, string $append)
 */
class Str extends Facade
{
    protected static function accessor()
    {
        return StrRootClass::class;
    }
}

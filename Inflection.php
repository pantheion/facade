<?php

namespace Pantheion\Facade;

use Pantheion\Utils\Inflection as InflectionRootClass;

/**
 * @method static string camelize(\string $string)
 * @method static string classerize(\string $string)
 * @method static string functionize(\string $string)
 * @method static string humanize(\string $string)
 * @method static string hyphenize(\string $string)
 * @method static string lowercase(\string $string)
 * @method static string pluralize(\string $string)
 * @method static string singularize(\string $string)
 * @method static string tablerize(\string $string)
 * @method static string titleize(\string $string)
 * @method static string underscorize(\string $string)
 * @method static string uppercase(\string $string)
 */
class Inflection extends Facade
{
    protected static function accessor()
    {
        return InflectionRootClass::class;
    }
}

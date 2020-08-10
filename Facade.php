<?php

namespace Pantheion\Facade;

abstract class Facade 
{
    protected static $instances;

    public static function __callStatic($method, $args)
    {
        return static::resolve()->$method(...$args);
    }

    abstract protected static function accessor();

    protected static function resolve()
    {
        return static::instance(static::accessor());
    }

    protected static function instance(string $accessor)
    {
        if(isset(static::$instances[$accessor])) {
            return static::$instances[$accessor];
        }

        $instance = static::getAppInstance($accessor);
        static::$instances[$accessor] = $instance;

        return $instance;
    }

    protected static function getAppInstance($accessor)
    {
        if(!app()->isBound($accessor)) {
            app()->singleton($accessor, function() use ($accessor) {
                return new $accessor;
            });
        }

        return app($accessor);
    }
}
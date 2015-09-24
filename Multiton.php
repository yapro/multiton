<?php

abstract class Multiton
{
    /**
     * @var self[]
     */
    private static $instances = [];

    /**
     * @params mixed
     * @return static
     */
    final public static function getInstance()
    {
        $calledClassName = get_called_class();
        if (!array_key_exists($calledClassName, self::$instances)) {
            self::$instances[$calledClassName] = new $calledClassName(func_get_args());
        }

        return self::$instances[$calledClassName];
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }

    protected function __construct()
    {
    }
}
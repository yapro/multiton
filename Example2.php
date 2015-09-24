<?php

include('Multiton.php');

class Example extends Multiton
{
    protected function __construct()
    {
        echo __FUNCTION__ . PHP_EOL;
    }

    public static function staticFunction()
    {
        echo __FUNCTION__ . PHP_EOL;
    }
}

Example::getInstance()->getInstance();
Example::staticFunction();
Example::getInstance();
<?php

include('Multiton.php');

abstract class AbstractClass extends Multiton
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class Example extends AbstractClass
{
}

Example::getInstance();
Example::getInstance()->getInstance()->getInstance();
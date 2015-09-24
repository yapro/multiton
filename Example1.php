<?php

include('Multiton.php');

class Example extends Multiton
{
    private $number = 0;

    protected function __construct()
    {
        $this->number++;
    }

    public function printNumber()
    {
        echo $this->number . PHP_EOL;
    }
}

Example::getInstance()->printNumber();
Example::getInstance()->getInstance()->printNumber();
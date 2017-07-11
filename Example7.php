<?php

include('Multiton.php');

abstract class AbstractClass extends Multiton
{
    protected $variableFromAbstractClass;

    public function __construct($value)
    {
        echo __METHOD__ . PHP_EOL;
        $this->variableFromAbstractClass = $value;
    }
}

class ExampleClass extends AbstractClass
{
    public function __construct(array $value)
    {
        echo __METHOD__ . PHP_EOL;
        parent::__construct(var_export($value, true));
    }

    public function printVariableFromAbstractClass()
    {
        echo __METHOD__ . PHP_EOL;
        echo $this->variableFromAbstractClass . PHP_EOL;
    }
}

ExampleClass::getInstance(1)->printVariableFromAbstractClass();// value = 1
ExampleClass::getInstance(2)->printVariableFromAbstractClass();// value = 1
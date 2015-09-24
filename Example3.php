<?php
include('Multiton.php');

class TestServer
{
    public $connect;

    public function __construct()
    {
        $this->connect = time();
    }
}

class Example extends Multiton
{
    private $server;

    protected function __construct()
    {
        $this->server = new TestServer();
        echo 'init server version: ' . $this->server->connect . PHP_EOL;
    }

    public function printServerConnect()
    {
        echo $this->server->connect . PHP_EOL;
    }
}

Example::getInstance();
Example::getInstance()->getInstance()->getInstance()->printServerConnect();
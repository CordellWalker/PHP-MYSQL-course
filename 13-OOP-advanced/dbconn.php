<?php
include_once "LoggerInterface.php";
include_once "trait.php";
class Singleton
{
    use Logger;
    public static $calls = 0;
    private $logger;

    public function __construct()
    {
        self::$calls++;
    }

    public static function getInstance()
    {
        static $db = null;
        if ($db == null) {
            $db = new Singleton();
        }
        return $db;
    }

    public static function getTotalCalls()
    {
        return self::$calls;
    }


    public function query()
    {
        $this->log('vrata');
    }
}
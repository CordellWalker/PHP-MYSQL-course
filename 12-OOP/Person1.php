<?php

class Person
{

public static $people = 0;
private $name;
private $age;

public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

        self::$people++;
    }


    function greet()
    {
    echo $this->name." -> ".$this->age."<br />";
    }

    public function   getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public static function   getPeople()
    {
        return self::$people;
    }
}
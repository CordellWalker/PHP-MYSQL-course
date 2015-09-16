<?php
require_once "dbconn.php";
require_once "logger.php";

$simple_class1 = Singleton::getInstance();
$simple_class2 = Singleton::getInstance();
$simple_class3 = Singleton::getInstance();
$simple_class4 = Singleton::getInstance();
$simple_class5 = Singleton::getInstance();


$db = Singleton::getInstance();
$db->setLogger(new Filelogger);
$db->query();

echo "<br /><br />";
echo "Singleton called <b>5</b> times: <br />";
echo "Number of 'connections': ". Singleton::getTotalCalls();
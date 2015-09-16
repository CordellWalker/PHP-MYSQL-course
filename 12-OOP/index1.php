<?php
require_once(dirname(__FILE__).'/Person1.php');

$ivan = new Person('Иван', 25);
$maria = new Person('Мария', 33);


$ivan->greet();
$maria -> greet();
echo $ivan -> getAge();
echo "<br>";
echo Person::getPeople();



?>
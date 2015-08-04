<?php
require_once "htmlFunctions.php";

$DEFAULT_HEADER = 'default';
printHeader();
echo "<br>";
printHeader('Header');
echo "<br>";
echo "Exo <br>";

printFooter();


htmlLink('Google', 'www.google.bg');
htmlLink();




$number = 12;
$multi = 3;
miltiply($number, $multi);
echo "$number <br>";
miltiply($number, $multi);
echo "$number <br>";
miltiply($number, $multi);
echo "$number <br>";


po2();
po2();
po2();
po2();


?>
<?php



$userName = $_POST["userName"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$taenVupr = $_POST["taenVupr"];
$taenOtg = $_POST["taenOtg"];
$mail = $_POST["mail"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];

 if ($pass1 != $pass2) 
{
	echo "паролите не съвпадат";
}
else if(mb_strlen($userName)>0 && mb_strlen($pass1)>0 && mb_strlen($pass2)>0 && mb_strlen($taenVupr)>0 && mb_strlen($taenOtg)>0 && mb_strlen($mail)>0 && mb_strlen($fName)>0 && mb_strlen($lName)>0 && mb_strlen($day)>0 && mb_strlen($month)>0 && mb_strlen($year)>0 )
{
	$userName = strip_tags(trim(htmlspecialchars($userName)));
	$pass1 = strip_tags(trim(htmlspecialchars($pass1)));
	$pass2 = strip_tags(trim(htmlspecialchars($pass2)));
	$taenVupr = strip_tags(trim(htmlspecialchars($taenVupr)));
	$taenOtg = strip_tags(trim(htmlspecialchars($taenOtg)));
	$mail = strip_tags(trim(htmlspecialchars($mail)));
	$fName = strip_tags(trim(htmlspecialchars($fName)));
	$lName = strip_tags(trim(htmlspecialchars($lName)));
	$day = strip_tags(trim(htmlspecialchars($day)));
	$month = strip_tags(trim(htmlspecialchars($month)));
	$year = strip_tags(trim(htmlspecialchars($year)));
}
else
{
	echo "не са попълнени всички полета";
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homework 2</title>
</head>
<body>
<?php
    $userArr = array();

	$userArr[] = array('Soft Intellect'=> 'http://soft-intellect.com/');
    $userArr[] = array('AБВ'=>'http://www.abv.bg/');
    $userArr[] = array('Mtel'=>'http://www.mtel.bg/');
    $userArr[] = array('Google' =>'https://www.google.bg/');
    $userArr[] = array('ЧЕЗ'=>'http://www.cez.bg/bg/home.html');

	
    
foreach($userArr as $var) 
{
    foreach($var as $key=>$value)
    {
        echo "<a href='$value'> $key </a>"  ;
        echo "<br>";
    }
}
  
?>

</body>
</html>

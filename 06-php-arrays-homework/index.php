<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
	$array = array(); 
	$array[] = "БМВ";
	$array[] = "Мерцедес";
	$array[] = "Форд";
	$array[] = "Пежо";
	$array[] = "Лада";
	$array[] = "Опел";

	for ($i = 0 ; $i < 6 ; $i++)
	{
		echo "<p> Искам да си купя $array[$i] </p>";
	}
	
	 array_pop($array);
	$counter = count($array);
	for ($i = 0 ; $i < $counter ; $i++)
	{
		echo "<p> Ще си купя $array[$i] </p>";
	}

	/* Втори вариант

	unset($array[5]);
	$counter = count($array);
	for ($i = 0 ; $i < $counter ; $i++)
	{
		echo "<p> Ще си купя $array[$i] </p>";
	} */
	
?>
</body>
</html>
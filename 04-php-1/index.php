<?php
	$name = "Краси";
	$Lname = "Златев";
	$promenliva1 = 9;
	$promenliva2 = 3;
	echo $name." ".$Lname;
	echo "<br />";
	$day = 23;
	if($day < 15 || $day == 23)
	{
		echo "далече сме от заплата";
	}	
	else 
	{
		echo "ще гушнем парите";
	}
	echo "<br />";

	//echo "A= "$promenliva1;
	$a = $promenliva1 - $promenliva2;
	echo $a;
	echo "<br />";

	$b = $promenliva1 + $promenliva2;
	echo $b;
	echo "<br />";

	

?>
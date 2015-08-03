<?php
	for($i=0; $i<101; $i++)
{
	
	if ($i % 2 == 0 && $i<101)
	{
		if ($i != 0 && $i % 7 == 0 )
		{
			echo "<span style='background-color:rgb(66,105,233);'>$i BINGO!!!<br></span>";
		}
		else 
			{
				echo "<span style='background-color:rgb(66,105,233);'>$i<br></span>";
			} 
	} 
	if ($i % 2 == 1)
	{
		if ($i != 0 && $i % 7 == 0 )
		{
			echo "<span style='background-color:rgb(35,239,82);'>$i BINGO!!!<br></span>";
		}
		else 
			{
				echo "<span style='background-color:rgb(35,239,82);'>$i<br></span>";
			} 
	}
	
}
?>
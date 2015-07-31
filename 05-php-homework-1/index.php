<?php
	for($i=0; $i<101; $i++)
{
	
	if ($i % 2 == 0 && $i<99)
	{
		if ($i != 0 && $i % 7 == 0 )
		{
			echo "<div style='background-color:rgb(66,105,233); width: 87px; height: 19px;'>$i BINGO!!!</div>";
		}
		else 
			{
				echo "<div style='background-color:rgb(66,105,233); width: 17px; height: 19px;'>$i</div>";
			} 
	} 
	if ($i % 2 == 1)
	{
		if ($i != 0 && $i % 7 == 0 )
		{
			echo "<div style='background-color:rgb(35,239,82); width: 87px; height: 19px;'>$i BINGO!!!</div>";
		}
		else 
			{
				echo "<div style='background-color:rgb(35,239,82); width: 17px; height: 19px;'>$i</div>";
			} 
	}
	if ($i == 100)
	{	
		if ($i != 0 && $i % 7 == 0 )
		{
			echo "<div style='background-color:rgb(66,105,233); width: 100px; height: 19px;'>$i BINGO!!! <br></div>";
		}
		else 
			{
				echo "<div style='background-color:rgb(66,105,233); width: 25px; height: 19px;'>$i<br></div>";
			} 
	}
	
}
?>
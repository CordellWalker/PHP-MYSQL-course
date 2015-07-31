<?php
	define("COLS", 4);
	define("ROWS", 5);


	echo "<table border='1'>";
	
	
	for($i=1; $i <= COLS; $i++ )
	{
		echo "<tr>";
		for($l=1; $l <= ROWS; $l++ )
		{
			echo "<td>$i, $l</td>";
			
		}
		echo "</tr>";
	}
	echo "</table>";
?>
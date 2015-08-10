<?php
	
	function calculation($a, $word) 
	{
		$num = strlen($word);
		if($num % 2)
		{
			$a+=12;
		}
		else
		{
			$a-=3;
		}
		if ($a>10)
		{
			$a-=22;
		}
		if ($a<0)
		{
			$a+=14;
		}
		echo $a;
		echo "<br>";
	}
	echo calculation(25, 'error');
	echo calculation(25, 'second');
	echo calculation(25, 'php');
	echo calculation(25, 'pokemon');
	echo calculation(25, 'Screenshot');
	echo calculation(25, 'Pneumonoultramicroscopicsilicovolcanoconiosis');


	
?>
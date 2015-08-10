<?php
	
	
	for($i = 0; $i < 10; $i++){
		$a = rand(1, 50);
		$ha = rand(1, 20);
		
		$s = calculation($a, $ha);
		
		if($s < 10)
	{
		echo "<div style='color:green'>Лицето на триъгълник със страна $a cm. и височина към нея $ha cm. е равно на $s квадратни сантиметра</div>";
		
	}	

	if ($s >= 10 && $s <= 23)
	{
		echo "<div style='color:red'>Лицето на триъгълник със страна $a cm. и височина към нея $ha cm. е равно на $s квадратни сантиметра</div>";
	} 
	if ($s > 23)
	{
		echo "<div style='color:blue'>Лицето на триъгълник със страна $a cm. и височина към нея $ha cm. е равно на $s квадратни сантиметра</div>";
	}
	}
	
	
	function calculation($a, $ha) {
		$s = ($a * $ha)/2;
		return $s;
	}
	
?>
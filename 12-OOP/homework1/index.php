<?php 
	require_once(dirname(__FILE__).'/Person.php');
	
	$georgi = new Person("Георги", 30, "gogo@abv.bg");
	$georgi->details();
	
	$ivan = new Person("Иван", 25, "ivan@gmail.com");
	$ivan->details();

	$vladi = new Person("Вл", 550, "vl");
	$vladi->details();

?>
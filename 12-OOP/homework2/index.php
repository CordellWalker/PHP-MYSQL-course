<?php 
	require_once(dirname(__FILE__).'/employee.php');
	require_once(dirname(__FILE__).'/policeman.php');
	require_once(dirname(__FILE__).'/doctor.php');
	
	$Georgi = new Policeman(168, 700, "Kapitan");
	
	$Georgi->showHoursMoney();
	$Georgi->showRank();
	

	$Martin = new Doctor(190, 1000, 20, 15);

	$Martin->showHoursMoney();
	$Martin->showWatches();



	$Kiro = new Doctor(150, 800);

	$Kiro->showHoursMoney();
	$Kiro->showWatches();
	
	

?>
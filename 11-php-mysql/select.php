<?php

$servername = "localhost";
$username = "phpcourseUser";
$password = "parola";
$dbname = "kindergarder";

$connection = mysqli_connect($servername, $username, $password, $dbname);
			
	if (!$connection) 
	{
		die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
	} 
mysqli_set_charset($connection, "utf8");

$action = "select";

if ($action == "select")
{
	$sql = "SELECT KinderGarderID, `Name`, Phone "."FROM kindergarder.kindergarder;";
		   
	$result = mysqli_query($connection, $sql);
	
	
	if (mysqli_affected_rows($connection) > 0) 
	{
	
		while ($row = mysqli_fetch_assoc($result)) 
		{
			$id = $row["KinderGarderID"];
			$name = $row["Name"];
			$phone = $row["Phone"];
			
			
			echo "$id - $name - $phone <br>";
			
		}
	} 
	else 
	{
		echo "Няма Резултати";
	}

}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<table border="1">
	<thead>
		<tr>
			<th>Име на дете</th>
			<th>Детска градина</th>
		</tr>
	</thead>

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

$sql = "SELECT `Name`, KinderGarderID "."FROM kindergarder.children;";
		   
	$result = mysqli_query($connection, $sql);
	
	
	if (mysqli_affected_rows($connection) > 0) 
	{
	
		while ($row = mysqli_fetch_assoc($result)) 
		{

			//$ChildID = $row["ChildID"];
			$name = $row["Name"];
			$KinderGarderID = $row["KinderGarderID"];
			
			echo "<tr>";
			//echo "<td>$ChildID</td>";
			echo "<td>$name</td>";
			echo "<td>$KinderGarderID</td>";
			echo "</tr>";
			
			
		}
	} 
	else 
	{
		echo "Няма Резултати";
	}

?>

</table>

</body>
</html>
<?php
	
function isValid($name)
{

	if(mb_strlen($name, "UTF-8") > 3 )
	{
		return true;
	}
	return false;
}
if(count($_POST) > 0)
{
	$name = $_POST["name"];
	$name = strip_tags($name);
	$name = trim($name);
	$name = htmlspecialchars($name);
?>
	<textarea><?=$name?></textarea>
	<?php 
	if( isValid($name))
	{
		echo "Успешна регистрация! <br>";

	}
	else
	{
		echo "проблем с регистрацията <br>";
	}
}

echo "GET <pre>".print_r($_GET, true)."</pre>\n<br>";
echo "POST <pre>".print_r($_POST, true)."</pre>\n<br>";

echo "<pre>";
var_dump($_GET);
echo "</pre>";
?>
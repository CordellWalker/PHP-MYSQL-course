<?php 

class Person 
{

   // DEPRECATED way of defining a object property ( variable )
   var $name;
   var $age;
   var $mail;

	public function __construct($name, $age, $mail)
	{
		
		if (mb_strlen($name) > 3)
		{
			$this->name = $name;
		}
		else
		{
			echo "грешно въведено име<br/>";
		}

		if ($age > 0 && $age < 200)
		{ 
			$this->age = $age;
		 }
		else
		{
			echo "грешно въвеждане на възраст<br/>";
		}
		
		if (mb_strlen($mail) > 3)
		{ 
			$this->mail = $mail;
		 }
		else
		{
			echo "грешно въведен mail<br/>";
		} 
	}

	function details()
	{
		echo "<div>";
		echo "<strong>$this->name </strong><br />";
		echo "<strong>$this->age</strong><br />";
		echo "<strong>$this->mail</strong><br />";
		echo "</div>";
		
		echo "<br/> <br/>";
	}
}

?>
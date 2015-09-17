<?php 
class Employee {
	
	protected $hoursPerMonth;
	protected $money;
	
	public function __construct($hoursPerMonth, $money)
	{
		$this->hoursPerMonth = $hoursPerMonth;
		$this->money = $money;
	}
	
	public function showHoursMoney()
	{
		echo "При $this->hoursPerMonth работни часа на месец<br />";
		echo "Получава $this->money лв. заплата.<br />";
	}
}
?>
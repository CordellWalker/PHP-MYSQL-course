<?php 

require_once(dirname(__FILE__).'/employee.php');

class Doctor extends Employee {
	
	protected $dayWatch;
	protected $nightWAtch;
	
	public function __construct($hoursPerMonth, $money, $dayWatch = 0, $nightWAtch = 0)
	{
		parent::__construct($hoursPerMonth, $money);
		$this->dayWatch = $dayWatch;
		$this->nightWAtch = $nightWAtch;
	}
	
	public function showWatches()
	{
		echo "Доктора има $this->dayWatch часа дневни дежурства за месеца и <br />";
		echo "$this->nightWAtch нощни дежурства за месеца.<br /><br />";
	}
}
?>
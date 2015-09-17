<?php 

require_once(dirname(__FILE__).'/employee.php');

class Policeman extends Employee {
	
	protected $rank;
	
	public function __construct($hoursPerMonth, $money, $rank)
	{
		parent::__construct($hoursPerMonth, $money);
		$this->rank = $rank;
	}
	
	public function showRank()
	{
		echo "Полицаят е с ранк: $this->rank <br /> <br />";
	}
}
?>
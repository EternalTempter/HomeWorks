<?php 

namespace Clover\CarInfo;

class TransmissionInfo extends CarInfo{

	public function checkFunctionality() : string
	{
		$difference = $this->getDifference($this->getLifeTime(),$this->getCurrentExploitationTime());
		$functionalityReport = match(true){
			$difference >= 500 => 'Stable',
			$difference >= 200 => 'Non Stable',
			$difference >= 0 => 'Require Test',
			$difference <= 0 => 'Danger',
		};
		return $functionalityReport;
	}
	public function checkEfficiency() : string
	{
		$difference = $this->getDifference($this->getLifeTime(),$this->getCurrentExploitationTime());
		$efficiencyReport = match(true){
			$difference >= 1000 => '95%',
			$difference >= 700 => '85%',
			$difference >= 0 => '70%',
			$difference <= 0 => '50%',
		};
		return $efficiencyReport;
	}
	public function predictRemainingUptime() : string
	{
		$difference = $this->getDifference($this->getLifeTime(),$this->getCurrentExploitationTime());
		$predictReport = match(true){
			$difference >= 730 => 'More than two years',
			$difference >= 365 => 'One-two years',
			$difference >= 182 => 'Half of the year',
			$difference <= 0 => 'Send it to dump',
		};
		return $predictReport;
	}
}
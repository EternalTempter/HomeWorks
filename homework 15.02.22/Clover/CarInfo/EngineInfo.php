<?php 

namespace Clover\CarInfo;

include 'CarInfo.php';

class EngineInfo extends CarInfo{

	public function checkFunctionality() : string
	{
		$difference = $this->getDifference($this->getLifeTime(),$this->getCurrentExploitationTime());
		$functionalityReport = match(true){
			$difference >= 1200 => 'Stable',
			$difference >= 800 => 'Used a bit',
			$difference >= 400 => 'Require Test',
			$difference >= 0 => 'Should not use',
			$difference <= 0 => 'Danger. Can blow up',
		};
		return $functionalityReport;
	}
	public function checkEfficiency() : string
	{
		$difference = $this->getDifference($this->getLifeTime(),$this->getCurrentExploitationTime());
		$efficiencyReport = match(true){
			$difference >= 1100 => '95%',
			$difference >= 500 => '75%',
			$difference >= 0 => '50%',
			$difference <= 0 => '30%',
		};
		return $efficiencyReport;
	}
	public function predictRemainingUptime() : string
	{
		$difference = $this->getDifference($this->getLifeTime(),$this->getCurrentExploitationTime());
		$predictReport = match(true){
			$difference >= 730 => 'Less than two years',
			$difference >= 365 => 'Less than one-two years',
			$difference >= 182 => 'Less than half of the year',
			$difference <= 0 => 'Utilize',
		};
		return $predictReport;
	}
}


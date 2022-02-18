<?php 
namespace Clover\CarInfo;

abstract class CarInfo{
	
	private ?int $currentExploitationTimeInDays = null;
	private ?int $lifeTimeInDays = null;

	abstract protected function checkFunctionality() : string;
	abstract protected function checkEfficiency() : string;
	abstract protected function predictRemainingUptime() : string;

	public function getCurrentExploitationTime() : ?int
	{
		return $this->currentExploitationTimeInDays;
	}
	public function setCurrentExploitationTime(int $currentExploitationTimeInDays) : void
	{
		$this->currentExploitationTimeInDays = $currentExploitationTimeInDays;
	}
	public function getLifeTime() : ?int
	{
		return $this->lifeTimeInDays;
	}
	public function setLifeTime(int $lifeTimeInDays) : void
	{
		$this->lifeTimeInDays = $lifeTimeInDays;
	}
	public function getDifference($lifeTimeInDays,$currentExploitationTimeInDays) : int
	{
		return ($lifeTimeInDays - $currentExploitationTimeInDays);
	}

}


<?php 

namespace Clover\CarInfo;

class NissanEngineInfo implements EngineInfoInterface{
	public function __construct(
		private string $brand,
		private string $model,
		private string $revolutions,
		private string $cylindersCount,
		private string $capacity
	){}
	public function getBrand() : string
	{
		return $this->brand;
	}
	public function getModel() : string
	{
		return $this->model;
	}
	public function getRevolutions() : string
	{
		return $this->revolutions;
	}
	public function getCylindersCount() : string
	{
		return $this->cylindersCount;
	}
	public function getCapacity() : string
	{
		return $this->capacity;
	} 
	public function setRevolutions(string $revolutions) : void
	{
		$this->revolutions = $revolutions;
	}
}
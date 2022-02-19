<?php 

namespace Clover\CarInfo;

class NissanTransmissionInfo implements TransmissionInfoInterface{
	public function __construct(
		private string $brand,
		private string $model,
		private string $type
	){}
	public function getBrand() : string
	{
		return $this->brand;
	}
	public function getModel() : string
	{
		return $this->model;
	}
	public function getType() : string
	{
		return $this->type;
	}
}
<?php 
namespace Clover\CarInfo;

abstract class CarInfo implements InfoProviderInterface{

	public function __construct(
		private EngineInfoInterface $engine,
		private TransmissionInfoInterface $transmission
	){}

	public function getEngine() : EngineInfoInterface
	{
		return $this->engine;
	}

	public function getTransmission() : TransmissionInfoInterface
	{
		return $this->transmission;
	}
}


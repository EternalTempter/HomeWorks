<?php 
namespace Clover\CarInfo;

use Clover\CarInfo\CarInfo;

class NissanInfo extends CarInfo {
	public function __construct(
		private NissanEngineInfo $engine,
		private NissanTransmissionInfo $transmission
	){
		parent::__construct(engine: $engine, transmission: $transmission);
	}
}

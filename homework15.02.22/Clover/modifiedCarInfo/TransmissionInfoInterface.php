<?php 

namespace Clover\CarInfo;

interface TransmissionInfoInterface{
	public function getBrand() : string;
	public function getModel() : string;
	public function getType() : string;
}
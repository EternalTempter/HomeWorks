<?php 

namespace Clover\CarInfo;

interface EngineInfoInterface{
	public function getBrand() : string;
	public function getModel() : string;
	public function getRevolutions() : string;
	public function getCylindersCount() : string; 
	public function getCapacity() : string; 
}


<?php
spl_autoload_register(function ($class) {
	require end(explode('\\', $class)) . '.php';
});

$nissan = new Clover\CarInfo\NissanInfo(
	new Clover\CarInfo\NissanEngineInfo('AX65','G76','25','4','5'),
	new Clover\CarInfo\NissanTransmissionInfo('TTRP2','LN98','auto'));
print_r($nissan->getTransmission()->getBrand());
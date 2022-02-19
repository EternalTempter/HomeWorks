<?php

namespace Clover\CarInfo;

interface InfoProviderInterface{
    public function getEngine() : EngineInfoInterface;
    public function getTransmission() : TransmissionInfoInterface;
}
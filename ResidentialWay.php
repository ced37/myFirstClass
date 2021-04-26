<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles = $vehicle;
    }
}
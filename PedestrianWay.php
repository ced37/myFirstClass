<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle) {

            $this->setCurrentVehicles = $vehicle;
        }


    }
}
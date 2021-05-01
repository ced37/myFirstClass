<?php

final class PedestrianWay extends HighWay
{
    protected array $currentVehicles  = [];
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(?Vehicle $car)
    {
        if ($car instanceof Bicycle === true) {
            $array = $this->getCurrentVehicles();
            array_push($array, $car);
            $this->setCurrentVehicles($array);
        }
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}
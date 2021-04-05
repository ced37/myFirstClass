<?php

class Car {
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 4;
    private string $energy = 'electric';
    private int $energyLevel = 100;

    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function forward(): string
    {
        $this->currentSpeed;
        return "Go !";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }
}

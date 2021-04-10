<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',];
    private string $energy;
    private int $energyLevel;   
    private int $storage = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy = $energy;
        $this->storageCapacity = $storageCapacity;

    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getStorage(): int
    {
        return $this->storage;
    }
    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }
    public function isFillingOrFull(): string
    {
        $sentence = "";
        if ($this->storage <= $this->storageCapacity) {
            $sentence = 'Full !!!';
        } else {
            $sentence .= 'In filling...';
        }
        return $sentence;
    }
}
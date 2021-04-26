<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);

echo $bicycle->forward();

echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';

echo $bicycle->brake();

echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';

echo $bicycle->brake();

/*-----------------------------------------------------------------------*/
$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);
echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();

var_dump(Car::ALLOWED_ENERGIES);

/*--------------------------------------------------------------------------*/
$Truck = new Truck(123, 'brown', 4, 'electric');

$Truck->setStorage(200);

var_dump($Truck);

echo '<br> Le chargement du camion est de : ' . $Truck->storageCapacity . 'kg' . '<br>';

echo $Truck->isFillingOrFull();

$Truck2 = new Truck(203, 'red', 5, 'fuel');

$Truck2->setStorage(200);

var_dump($Truck2);

echo '<br> Le chargement du camion est de : ' . $Truck2->storageCapacity . 'kg' . '<br>';

echo $Truck2->isFillingOrFull();

/*----------------------------------------------------------------------------*/

$motorway = new MotorWay(4, 130);
var_dump($motorway);

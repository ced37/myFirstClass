<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('black', 3);
var_dump($bike);

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

$rockrider = new Bicycle('yellow', 20);

$tornado = new Bicycle('white', 30);

$tornado->forward();

var_dump($rockrider);

$tornado->dump();

/*-----------------------------------------------------------------------*/
$car = new Car('green', 50);
var_dump($car);

echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();







?>
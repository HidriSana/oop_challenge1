<?php
require_once 'Bicycle.php';
require_once 'Car.php';
//Bike story

$bike = new Bicycle\Bicycle('blue');



$bike->setCurrentSpeed(0);


echo $bike->forward();
echo '</br>Vitesse du vélo: ' . $bike->getCurrentSpeed() . 'km/h' . '</br>';
echo $bike->brake();
echo '</br>Vitesse du vélo: ' . $bike->getCurrentSpeed() . 'km/h' . '</br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle\Bicycle('yellow');
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle\Bicycle('black');
$tornado->setColor('white');
$tornado->forward();


//Car story

$car = new Car\Car('Blue', 4, 'Electric');

$car->dump();

echo $car->start();
echo $car->getCurrentSpeed();
echo $car->forward();
echo $car->getCurrentSpeed();
echo $car->brake();
echo $car->getCurrentSpeed();

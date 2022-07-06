<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$car = new Car('grey', 2, 'gas');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du véhicule : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';
$bike->dump();
echo '<br>';
// Moving car
echo $car->start();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h';
echo '<br> Niveau de carburant : ' . $car->getEnergyLevel() . ' L' . '<br>';
echo $car->forward();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br> Niveau de carburant : ' . $car->getEnergyLevel() . ' L' . '<br>';
//echo $car->brake();
echo '<br>';
$car->dump();
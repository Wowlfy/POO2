<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$bike->setColor = 'blue';
$bike->setCurrentSpeed = 0;

echo $bike->start() . '<br>';
echo $bike->forward();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . $bike->start();

echo '<br><br>';

$car = new Car();
$car->setColor = 'blue';
$car->setCurrentSpeed = 0;

echo $car->start() . '<br>';
echo $car->forward();
echo '<br> car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>' . $car->start();

echo '<br><br>';

$car2 = new Car();
$car2->setColor = 'blue';
$car2->setCurrentSpeed = 0;

echo $car2->start() . '<br>';
echo $car2->forward();
echo '<br> car speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> car speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br>' . $car2->start();

$truck = new Truck();
$truck->setColor = 'blue';
$truck->setCurrentSpeed = 0;

echo $truck->getfull() . 'tonnes';
echo $truck->start() . '<br>';
echo $truck->forward();
echo '<br> truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br>' . $truck->start();



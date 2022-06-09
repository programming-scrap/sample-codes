<?php
include_once('model/car/car.php');
include_once('model/tire/normal_tire.php');

$car = new Car(
    new NormalTire(),
    new NormalTire(),
    new NormalTire(),
    new NormalTire(),
);

echo "1000キロ走ります\n";
$car->drive(1000);
echo "まだ走れますか？";
$car->check();

echo "\n";

echo "10000キロ走ります\n";
$car->drive(10000);
echo "まだ走れますか？";
$car->check();

echo "\n";

echo "10000キロ走ります\n";
$car->drive(10000);
echo "まだ走れますか？";
$car->check();



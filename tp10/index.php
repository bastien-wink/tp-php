<?php

require_once 'AbstractVehicule.php';
require_once 'Car.php';


$clio = new Car(40, 120);
$clio
    ->setFuel(80)
    ->setSpeed(130)
    ->drive()
    ->drive()
    ->drive()
;

echo $clio->getFuel() ;

?>
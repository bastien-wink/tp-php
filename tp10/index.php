<?php

namespace BastienCorp;

require_once 'classes/CarManager/AbstractVehicule.php';
require_once 'classes/CarManager/Car.php';

use BastienCorp\CarManager\Noms_Extremement_Long as Car;

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
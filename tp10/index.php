<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

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

</body>
</html>
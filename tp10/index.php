<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
</head>
<body>

<?php

abstract class AbstractVehicule{
    protected $maxSpeed = 500;
}

class Car extends AbstractVehicule
{
    // Fuel est en %
    private $fuel;

    // Speed en Km/h
    private $speed;

    public function __construct($fuel = 100, $speed = 80)
    {
        $this->fuel = $fuel;
        $this->speed = $speed;
    }

    public function refuel()
    {
        $this->fuel = 100;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function setFuel(int $fuel): Car
    {
        $this->fuel = $fuel;
        return $this;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): Car
    {
        $this->speed = $speed;
        return $this;
    }

    public function drive()
    {
        if($this->fuel >= 15){
            echo "Vroom vroom, 1k de plus, ma maxSpeed est " .  $this->maxSpeed . "<br/>";
            $this->fuel -= 15 ;
        }else{
            echo "Du stop !<br/>";
        }
        return $this;
    }
}



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
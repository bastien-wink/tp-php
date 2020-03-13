<?php

namespace BastienCorp\CarManager;

class Noms_Extremement_Long extends AbstractVehicule
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

    public function drive(): Car
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

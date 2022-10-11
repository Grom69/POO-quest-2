<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {

 private int $stockCapacity;

 private int $filling =0;

 private string $energy;


public function __construct(string $color, int $nbSeats, string $energy, $stockCapacity) 
{
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $this->stockCapacity = $stockCapacity;

}

public function checkFilling () : string
{
    if ($this->filling >= $this->stockCapacity)
        return 'full';
    else 
        return 'in filling';
}

public function setFilling ($filling) : void
{
    $this->filling = $filling;
}

public function getFilling(): int
{
    return $this->filling;
}

public function setStockCapacity ($stockCapacity) : void
{
    $this->stockCapacity = $stockCapacity;
}

public function getStockCapacity(): int
{
    return $this->stockCapacity;
}

public function setEnergy ($energy) : void
{
    $this->energy = $energy;
}

public function getEnergy(): string
{
    return $this->energy;
}


}
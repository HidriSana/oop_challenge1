<?php

namespace  Car;

class Car
{
    //Attributes
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energyType;
    private string $energyLevel;
    //Methods
    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }
    public function start()
    {
        $this->currentSpeed = 10;
    }
    public function forward()
    {
        while ($this->currentSpeed < 100) {
            $this->currentSpeed += 10;
        }
        return $this->currentSpeed;
    }
    public function brake()
    {
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
        }
        return $this->currentSpeed;
    }
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function getEnergyType()
    {
        return $this->energyType;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
    public function dump()
    {
        var_dump($this);
    }
}

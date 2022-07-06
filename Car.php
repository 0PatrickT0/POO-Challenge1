<?php
// Car.php
class Car
{

// Attributs & Valeurs

    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color = 'grey';
    private int $nbSeats = 2;
    private string $energy = 'gas';
    private int $energyLevel = 200;

// Constructeur

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

// Méthodes

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Get started !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 100;
        return "Go !";
        //$sentence = "";
        //while ($this->currentSpeed > 0) {
        //    $this->energyLevel--;
        //    $sentence .= "Energy -1";
        //}
        //$sentence .= "out of gas ! I'm stopped !";
        //return $sentence;
    }

    //public function energyLevel(): string
    //{
    //    $sentence = "";
    //    while ($this->currentSpeed > 0) {
    //        $this->energyLevel--;
    //        $sentence .= "";
    //    }
    //    $sentence .= "out of gas ! I'm stopped !";
    //    return $sentence;
    //}

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "";
            $this->energyLevel--;
            $sentence .= "";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

// Getters & Setters

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function dump()
    {
        var_dump($this);
    }
}

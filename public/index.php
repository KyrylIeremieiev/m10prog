<?php

echo 'M10 PROG';

class Car{
    private $color = 'blue';
    private $seats = 6;
    private $passangers = 0;
    private $speed = 50;
    private $availableSeats = 6;

    public function modify(string $newColor, int $newSeats){
        $this->color = $newColor;
        $this->seats = $newSeats;

        echo 'New Color: ' . $this->color . '. New Amount Of Seats: ' . $this->seats;
    }


    public function speedup(int $newSpeed){
        $this->speed = $newSpeed;
        echo 'Sped up!. New Speed: ' . $this->speed;
    }

    public function passangerChange(int $newPassangers){
        $this->passangers = $newPassangers;
        $this->availableSeats = $this->seats - $this->passangers;

        echo 'New Passanger Amount: ' . $this->passangers . ". Amount of seats left: " . $this->availableSeats; 
    }
}

$car = new Car();

$car->passangerChange(3);
<?php

echo 'M10 PROG';

class Car{
    private $color = 'blue';
    private $seats = 6;
    private $passangers = 0;
    private $speed = 50;
    private $availableSeats = 6;

    public function modify(string $newColor = 'blue', int $newSeats = 6){
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
        if($this->availableSeats < 0){
            echo 'Help! The Car is Overflowing';
        }
        else{
            echo 'New Passanger Amount: ' . $this->passangers . ". Amount of seats left: " . $this->availableSeats; 
        }
        
    }
}

class BigCar extends Car{
    public function __construct(){
        parent::modify('blue', 10);
    }
}

$car = new Car();
$car->modify('blue', 3);
$car->passangerChange(5);
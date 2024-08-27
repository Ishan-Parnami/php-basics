<?php
    class Car{
        public $make;
        public $model;
        public $year;
        public $color;

        public function EngineStart(){
            return "Engine starts";
        }
        // public function __construct($color, $model, $year, $make){
        //     $this->make = $make;
        //     $this->model = $model;
        //     $this->year = $year;
        //     $this->color = $color;
        // }
    }

    $myCar = new Car();
    $myCar->make = "Toyota";
    $myCar->model = "Camry";
    $myCar->year = 2020;
    $myCar->color = "Red";

    echo "My car is a $myCar->color colour $myCar->make $myCar->model, manufactured in $myCar->year.<br>";
    echo $myCar->EngineStart();
    ?>
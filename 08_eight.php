<?php 

class Car {
    public $mobile;
    public $model;

    public function __construct($mobile, $model){
    $this->mobile=$mobile;
    $this->model=$model;
    }
    public function displayinfo(){
        echo "this is mobile ". $this->mobile . " and this is model ".  $this->model;
    }

}

$mycar = new Car("realme", "5s");
$mycar->displayinfo();
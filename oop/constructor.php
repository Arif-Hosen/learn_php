<?php
// constructor - is a special type of method. Using constructor we can initialize object property when object created and autometically call this function
class Car{
   public $model;
   public $price;
   
   function __construct($model, $price){
    $this->model = $model;
    $this->price = $price;
   }

   function carInfo(){
    return 'Model and price = '.' '.$this->model .' '.$this->price;
   }
}

$bmw = new Car('Alpha-387P', 20000);
$audi = new Car('ZX-99H', 50000);

echo $bmw->carInfo(),'<br>';
echo $audi->carInfo(),'<br>';
?>
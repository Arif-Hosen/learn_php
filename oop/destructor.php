<?php 
// Destructor - is autmatically called after the script is stoped or exit. 
class Car{
   public $model;
   public $price;
   
   function __construct($model, $price){
    $this->model = $model;
    $this->price = $price;
   }

   function __destruct()
   {
    echo  "Model and price = {$this->model} {$this->price}" , '<br>';
   }
}

$bmw = new Car('Alpha-387P', 20000);
$audi = new Car('ZX-99H', 50000);
?>
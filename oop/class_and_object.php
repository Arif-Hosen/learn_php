<?php 
// oop - oop is a programming paradigm. We can use oop instead procedural program(function based). OOP makes easier to maintain, reusable, debug, modify. We dont need repeat code again and again (oop helps to keep Don't repeat yourself principle).
// class - is a template of object. we can define the property like variable, method in class and thoose are accesible from class instance (object).
// object - is instance of class. creating a object of a class, that class inherited property of class.

// class and object create
class Fruit{
   public $name; //property of fruit class
   public $color;
   public $country;
   
    //    method
   function setProperty($name, $color, $country){
    $this->name = $name;
    $this->color = $color;
    $this->country = $country;
   } 
   
   function getName(){
    return $this->name;
    }
    
   function getColor(){
    return $this->color;
    }
}
echo "<h3>OOP- Class and Object</h3>";
// object create
$mango = new Fruit();
// call method and pass value, 
$mango->setProperty('Mango', 'Light Yellow', 'BD');
// print property value by property access
echo "Name = ", $mango->name, "<br>";
echo "Color = ", $mango->color, "<br>";
echo "country = ", $mango->country, "<br>";

// princt value by method call
echo $mango->getName(), "<br>";
echo $mango->getColor(), "<br>";

// check is mango object belongs to Fruit class - return true/false
var_dump($mango instanceof Fruit);

?>
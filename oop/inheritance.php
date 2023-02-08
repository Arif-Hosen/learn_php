<?php
/*
# Inheritance - A class can be derives from another classs. Inherited class is parent class and derive class is child classs. Child class can be accessed all property and method of parent class. child can have it's own property.
# final - final keyword used to prevent inherantance of a class and method overriding.
# overriding - method name of child class same as parent class.
*/

 class Person{
    public $name;
    public $age;

    public function __construct($n , $a){
        $this->name =$n;
        $this->age =$a;
    }

    // final protected function info(){
    //     echo "<br>My name is $this->name and Age is $this->age <br>";
    // }
     protected function info(){
        echo "<br>My name is $this->name and Age is $this->age <br>";
    }
}
// child of person
class Baker extends Person{
    public $phone;
    // overriding method of parent class
    public function __construct($n, $a, $p)
    {
        $this->name = $n;
        $this->age = $a;
        $this->phone = $p;
    }
    public function info(){
        echo "<br>My name is $this->name and Age is $this->age. Phone is $this->phone <br>";
    }

    public function identity(){
        echo "Who am I ?";
        // method call in 3 ways
        $this->info() ;
        // self::info();
        // Person::info();
    }
}
// child of Baker and grandchild of Person
class Address extends Baker{
    function moreInfo(){
        $this->identity();
        $this->info();
    }
}

$baker = new Baker('Baker Mia', 22,0177777);
$baker->info();
// $baker->info();
?>
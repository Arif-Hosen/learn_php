<?php
/*
static method - if we need to call a function without creating object/instance we cannot do that. Here we use static method, which is allow us without creating object we can call method. syntax- className::method name . (:: scope resolution operator)
-> static method doesnot use ($this) keyword.
*/ 
class University{
    // static method canbe call from another method in the class
    public function __construct($dept,$uni){
        self::admission($uni);
        echo " Dept of $dept <br>";
    }

    public static function admission($uni){
        echo "Welcome to our $uni university. <br>";
    }
}
new University("CSE","Stamford");
// University::admission('Stamford');

// static method canbe call from method in other class
class Grerting{
    public function __construct(){
        University::admission('Stamford');
    }
}
new Grerting();

// static method canbe call from child class
class CSE extends University{
    function __construct(){
        University::admission('Brac');
    }
}
new CSE();

?>
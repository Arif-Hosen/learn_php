<?php
/*
traits - if a class need inherit from multiple class, php does not support it. But using traits it can solved. it can have methods and abstract methods, also support any access modifier.
*/ 

/* here we cannot inherit 2 parent class-
class Bank{
    public function customer(){
        echo "Bank has customer";
    }
}

class Office{
    public function duty(){
        echo "Duty on";
    }
}

 here we cannot inherit 2 parent class-
 class Brac extends Bank , Office{
 public function duty()
 }
 }
 */

 trait Bank{
    public function service(){
        echo "Bank provide service<br>";
    }
 }
trait Security{
    public function deposit(){
        echo "Your deposit has security";
    }
}

 class BracBank{
    use Bank;
    use Security;
 }

 $bracBank = new BracBank();
 $bracBank->service();
 $bracBank->deposit();

?>
<?php
/*
# interface - contain some method, which must be used when implements the interface in a class, all method in interface is abstract, so dont need to define abstract keyword. interface just declare method, which is implement method from different class in different way. classes can implement interface while inheriting a class at the same time.
*/ 
interface Employees {
  public function task($name);
}

class Arif implements Employees {
  public function task($name) {
    echo "$name Working in development <br>";
  }
}

class Arman implements Employees{
    public function task($name){
        echo "$name Working in soft development <br>";
    }
}

$arif = new Arif();
$arman = new Arman();

$arif->task('Arif');
$arman->task('Arman');
?>
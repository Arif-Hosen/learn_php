<?php
use Car\BMW;
use Car\Mercedez;

/*
* auto load - sometimes we need multiple file's class in a file, here we use autoloading. 
* psr- php standard recommendation - is set of standards which ensure working with php easier. ex- psr1- coding standard, psr7- http request standard, psr4- autoloading standard.
* psr4 - provides the ability  to include classes based on their file path. like, you define BMW, Mercedex classes in different file and their namespace is Car. To load those file we need include 2 files for twice. using psr4 we can include file with autoloading.

step1 - run composer init to top directory
step2 - add "autoload" property in composer.json file, add "psr-4" property - it's property is namespaces of classes and value is file directory (where auto load will find the namespaces).
ex--
"autoload": {
        "psr-4": {
            "Car\\": "oop/autoload/car/"
        }
    },
step3 - run composer dump-autoload
step4 - include the vendor/autoload.php file where you need those classes.
* note-  when you include vendor/autoload.php, becareful about your current directory. like - vendor/autoload.php is 3 step upper directory from your current directory, here you use- (include_once "../../../vendor/autoload.php");
*/ 

include_once "../../../vendor/autoload.php";

$bmw1 = new BMW();
$bmw1->displayPrice();

$mercedez1 = new Mercedez();
$mercedez1->displayPrice();

?>
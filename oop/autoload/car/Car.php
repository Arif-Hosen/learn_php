<?php
use Car\BMW;
use Car\Mercedez;

/*
* auto load - Sometimes we need multiple files of classes in a file, here we can use autoload.

* PSR- PHP Standard Recommendation - is a set of standards that ensure working with PHP is easier. Example: PSR1- Coding standard, PSR7- HTTP request standard, PSR4- Autoloading standard.

* PSR4 - Provides the ability to include classes based on their file path. Like, you define BMW, and Mercedez classes in a different file and their namespace is Car. To load those files we need to include 2 files twice. Using PSR4 we can include files with autoloading. So, we don't need include files of classes again again.

Steps of using auto load-
Step 1: If you have installed composer. Run 'composer init' to the top directory of your project folder.
Step 2: Add the "autoload" property in the composer.json file, and add the "psr-4" property - its property is namespaces of classes and the value is file directory (where the auto load will find the namespaces).
ex--
"autoload": {
        "psr-4": {
            "Car\\": "oop/autoload/car/"
        }
    },
Step 3: Run "composer dump-autoload"
Step 4: Include the "vendor/autoload.php" file where you need those classes.
*Note:  When you include vendor/autoload.php, be careful about your current directory. For - "vendor/autoload.php" is in 3 steps upper directory from your current directory, here you use- (include_once "../../../vendor/autoload.php").
*/ 

include_once "../../../vendor/autoload.php";

$bmw1 = new BMW();
$bmw1->displayPrice();

$mercedez1 = new Mercedez();
$mercedez1->displayPrice();

?>
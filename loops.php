<?php
// break - jump out of a loop
// continue - brack one iteration in the loop

// while loop
$a = 0;

while($a < 10){
    echo "while looop Number is ", $a ,'<br>';
    $a++;
}

// do while
$b = 0;

do{
    echo "do while loop Number is", $b,'<br>';
    $b++;
}while($b < 10);

// for loop
for ($i=0; $i < 1000; $i+=100) { 
    echo "for loop number is ", $i , '<br>';
}

$cars = array('bmw', 'toyota', 'hundai');

foreach($cars as $car => $val){

    if($car == 1){
        continue;
    }
    echo "for each car key is ", $car, ' and value' ,'<br>';
}

?>
<?php declare(strict_types = 1);
function addNumbers($n ,  $m):float{
    return (int)$n + $m;
}

$result =  addNumbers(10,12);
// var_dump($result);
// echo "Result = ",$result;

// passing arguments by reference
$number = 20;
$p = &$number;
$number = 30;
echo "Number = ",$number, " P ",$p ,'<br>';
echo "Actual Number ",$number;

function mulNumbers($n , &$m){
    $m = $n + $m;
}
mulNumbers(30, $number);
echo 'Afer func call number ',$number ,'<br>';


?>
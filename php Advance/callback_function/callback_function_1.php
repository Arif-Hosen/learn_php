<?php
function calculation(){
    $a = 10;
    $b = 20;
    $sum = $a + $b;
    return $sum;
}

function display($r){
    echo "Display", $r;
}

display(calculation());
?>
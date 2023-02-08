<?php
// validate a integer num between range
$num = 3333;
$min = 1;
$max = 400;

if(!filter_var($num, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range" => $max))) === false){
    echo "Num is between range ",$num,'<br>';
}
else{
    echo "Num is not between range ",$num,'<br>';
}
?>
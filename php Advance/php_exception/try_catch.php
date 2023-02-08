<?php  
// exception is a object to describe about error.
// try - catch used for catch exception, try- throw exception and catch - caught the exception
function divide($a, $b){
    if($b == 0){
        throw new Exception("divided by 0");
        
    }
    return $a/$b;
}

try {
    divide(10 ,0);
} 
catch (Exception $e) {
    echo "Not dividable, b is 0";
}

?>
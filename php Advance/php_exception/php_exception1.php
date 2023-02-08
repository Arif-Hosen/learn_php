<?php  
// exception is a object to describe about error
function sumTwoNumber($a, $b){
    if($a > $b){
        throw new Exception("a is greater than b");
        
    }
}
sumTwoNumber(10,5);

?>
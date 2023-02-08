<?php  
// exception - is a object to describe about error.
// try..catch -used for catch exception, try- throw exception and catch - caught the exception, 
// finally - always excute after ther catch statement, if exception is throw or not the finally statement will run always.
function divide($a, $b){
    if($b == 0){
        throw new Exception("divided by 0");
        
    }
    return $a/$b;
}

try {
    divide(10 ,0);
} 
catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $line = $ex->getLine();
    $file = $ex->getFile();
    echo "<h3 style='color:red'>The error throw in $file on line $line : [Code $code] $message <h3>";
}
finally{
    echo "Process Complete.";
}

?>
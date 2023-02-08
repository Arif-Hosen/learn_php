<?php
/*
variable-  is a container used to store data.
php variable is case-sensitive.
No needs to define data type like other language.
*/ 
$a = 90;
$b = 34.2;
$c = "learning php";
$C = "today or tommorrow i will go back";

echo "The output is $a \r\n",$b, "\r\n", $c,"\r\n" , $C, '<br>';  


// php has 3 variable scope - local, global, static
// using global keyword global scope's variable can be acceesible in function or local scope
// we can also use $GLOBALs[] to access
$x = 20;
function checkingGlobalScope(){
    // $x is in global scope - so x not accessible
    // x will be accessible if we use global keyword
    echo "checkingGlobalScope = ",$GLOBALS['x'], '<br>';
    $y = 2;
}
echo "checkingLocalScope = ", $y, '<br>';
checkingGlobalScope(); 

// static- when function is executed/completed. the variables are deleted. sometimes we need them to further use. here we use static keyword
function staticKeywordCheking(){
    static $n = 10;
    echo "Static keyword = ", $n ,'<br>';
}
staticKeywordCheking();
staticKeywordCheking();
staticKeywordCheking();

?>
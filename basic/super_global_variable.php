<?php
// super global variable - are aceessible all scope in the script, ex: we can use from function, class.

// GLOBALS['index']
$a = 10;
function checkGlobalVariable()
{
    echo "Global variable = ", $GLOBALS['b']  = $GLOBALS['a'];
}
checkGlobalVariable();
echo $b, '<br>';

// SERVER['']
echo "SERVER SUPER global variable", '<br>';
echo "php self - ", $_SERVER['PHP_SELF'], '<br>'; //RETURN THE FILE PATH
echo "SERVER_ADDR - ", $_SERVER['SERVER_ADDR'], '<br>'; //RETURN THE SERVER IP
echo "SERVER_NAME - ", $_SERVER['SERVER_NAME'], '<br>'; //RETURN THE HOST SERVER NAME
echo "SERVER_PROTOCOL - ", $_SERVER['SERVER_PROTOCOL'], '<br>'; //RETURN THE INFROMATION OF PROTOCOL
echo "QUERY_STRING - ", $_SERVER['QUERY_STRING'], '<br>'; //RETURN THE QUERY STRING
echo "REMOTE_ADDR - ", $_SERVER['REMOTE_ADDR'], '<br>'; //RETURN THE REMOTE IP ADDRESS
echo "SERVER_PORT - ", $_SERVER['SERVER_PORT'], '<br>'; //RETURN THE PORT OF SERVER MACHINE
echo "SCRIPT_FILENAME - ", $_SERVER['SCRIPT_FILENAME'], '<br>'; //RETURN THE ACTUAL PATH NAME OF CURRENTLY EXECUTING SCRIPT



?>
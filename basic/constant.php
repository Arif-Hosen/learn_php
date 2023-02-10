<?php
// constant - does not change the value. It is autometically global and could access anywhere in entire script.

define('arif',23);
const arman = 24;
$a =1001;

echo arif;
echo $GLOBALS['a'];

echo arman;
?>
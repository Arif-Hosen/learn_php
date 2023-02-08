<?php
// String - is sequence of character

$myString = 'BD Bank suffer sour loans';

echo strlen($myString), '<br>';

echo str_word_count($myString), '<br>';
echo strrev($myString), '<br>';
echo strpos($myString,'sour'), '<br>';

echo str_replace('sour','depricate',$myString), '<br>';

$arr = ['arif', 'testing', 23]; 
var_dump(explode(' ',$myString));
var_dump(implode($arr));


?>
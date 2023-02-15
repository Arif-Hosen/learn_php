<?php 
// echo and print - twice is used for displaying output.
// difference - echo does not return anything, but print return 1

 $a = '<h3 style="color:red">Hello</h3>';
$b = "<h2>Hello</h2>";
$c = '<h1>Hello</h1>';

echo "echo = ", $a;
echo "echo = ", $b;
echo "echo = ", $c;

print $a;
$d = print $b;
print $d;


?>
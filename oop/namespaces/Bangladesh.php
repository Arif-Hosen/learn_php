<?php
/*  *namespace - . it a concept or way to grouping the class, functions etc for better organization. ex- like folder directory of operating system. there can be remain multiple time file or folder in same name in different different directory. Namespace works similarly.
used for 2 purpose-
    1. Avoid collisions between classes, functions, interfaces
    2. Allowed alias or shorten of class, functions, constants to improve readivility of code
*/
 namespace Bangladesh\B;
 class Infos{
    public function displayInfo(){
        echo "From BD<br>";
    }
 }

 function hello(){
    echo "Hello from bd<br><br>";
 }
 ?>
<?php
// database create with PDO
/*
pdo - it has exception class(PDOException) to handle error or problem that occur in
database queries. If an exception is thrown in try{} block, program
will stop executing in try  block and goes to catch{} block.
*/
$serverName = "localhost";
$userName = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$serverName", $userName, $password);

    // setting the PDO error to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE learningPHP";

    $connection->exec($sql);
    echo "<h3 style='color:green'>Database successfully created!</h3>";

}
catch(PDOException $e){
    echo "sql = $sql <br>","<h4 style='color:red'>myMssg = Sorry an error occured!, $e</h4><br>","<h4 style='color:salmon'>pdo mssg {$e->getMessage()}</h4><br>";
}
finally{
    echo "<br>Connection Closed";
}

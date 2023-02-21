<?php
$serverName = "localhost";
$dbName = "learningphp";
$username = "root";
$pass = "";

try{
    $connection = new PDO("mysql:host=$serverName; dbname=$dbName",$username,$pass);
    echo "<h4 style='color:green'>Successfully connected!</h4>";

    // set PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = " INSERT INTO EMPLOYEES(name, address,email, phone) VALUES('ARIF HOSEN', 'Dhaka', 'a@c.com',012839)";
    $connection->exec($sql);
}
catch(PDOException $e){
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
$connection = null;
?>
<?php
$servername = "localhost";
$dbname = "learningphp";
$username = "root";
$pass = "";

try {
    //connection
    $connection = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pass);
    
    echo "<h4 style='color:green'>Successfully connected!</h4>";
    // set pdo errormode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connection->beginTransaction();

    $connection->exec("INSERT INTO EMPLOYEES(name, email, phone) VALUES('SADIK','sadin@s.com',01938)");
    $connection->exec("INSERT INTO EMPLOYEES(name, email, phone) VALUES('rahim','rahim@s.com',01936)");
    $connection->exec("INSERT INTO EMPLOYEES(name, email) VALUES('jabbar','jabbar@s.com')");

    $connection->commit();
    echo "<h4 style='color:green'>Successfully all data inserted!</h4>";

} catch (\PDOException $e) {
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
$connection = null;

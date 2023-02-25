<?php
$servername = "localhost";
$dbname = "learningphp";
$username = "root";
$pass = "";

try {
    $connection = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pass);
    echo "<h4 style='color:green'>Successfully connected!</h4>";

    // pdo error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $statement = $connection->prepare("INSERT INTO EMPLOYEES(name, email, address) VALUES(:name, :email, :address)");
    
    // bind
    $statement->bindParam(':name', $nam);
    $statement->bindParam(':email', $emai);
    $statement->bindParam(':address', $addre);

    // insert a row to db
    $nam = "Mofiza";
    $emai = "amofiz@m.com";
    $addre = "khulna";
    $statement->execute();

    echo "<h4 style='color:green'>Successfully Data Inserted!</h4>";
} catch (PDOException $e) {
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
?>
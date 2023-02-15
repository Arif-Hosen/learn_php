<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "learningphp";

try{
    $connection = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);

    // set pdo error to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h4 style='color:green'>Successfully connected!</h4>";

    $sql = "CREATE TABLE EMPLOYEES(
        id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        address VARCHAR(100),
        phone VARCHAR(100) DEFAULT 0178,
        email VARCHAR(50),
        regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $connection->exec($sql);
    echo "<h4 style='color:green'>Successfully Employees table created!</h4>";

}
catch(PDOException $e){
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
$connection = null;
?>
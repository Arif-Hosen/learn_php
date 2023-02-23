<?php
$servername = "localhost";
$dbname = "learningphp";
$username = "root";
$pass = "";


try{
// connection
$connection = new PDO("mysql:host=$servername; dbname=$dbname", $username,$pass);
echo "<h4 style='color:green'>Successfully connected!</h4>";

// set PDO errormode to exception
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO  employees(name,email) VALUES('AKBAR ALI', 'akbar@ali.com')";
$connection->exec($sql);

// last inserted id
$lastId = $connection->lastInsertId();
echo "Last Inserted id = ",$lastId;
}
catch(PDOException $e){
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
$connection =null;
?>
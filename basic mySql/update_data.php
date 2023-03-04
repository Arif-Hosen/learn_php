<!-- update - is used for update existing record/records -->
<?php
$servername = "localhost";
$dbname = "learningphp";
$username = "root";
$pass = "";

try {
    $connection = new pdo("mysql:host=$servername; dbname=$dbname", $username, $pass);
    echo "<h4 style='color:green'>Successfully connected!</h4>";

    // set pdo error to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->prepare("UPDATE employees SET name='Akkas Ali', email='akkas@a.com' WHERE(id=11)");
    $statement->execute();

    echo "<h4 style='color:green'>{$statement->rowcount()} Successfully Data Update!</h4>";
} catch (PDOException $e) {
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
?>
<!-- 
    * MySQL - is a open source relational database management system(RDBS), developed by Oracle. It's run on the server, fast and easy to use.

    *php + MySql - php with Mysql is cross platform (we can develop on window and serve on unix platform)

    * php connection with mysql - php work with mysql using 
        1. MySQLi extension 2. PDO (php data object)
        we can use anyone from them. PDO works 12 database system but mysqi extension works only will MySQL. 
        
 -->

<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$servername;dbname=learnDB", $username, $password);
    // set PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3 style='color:green;'> Connected Successfully With DB!</h3>";

}
catch(PDOException $e){
echo "Connection Failed: ", $e->getMessage();
}
// close the connection
$connection = null;
?>
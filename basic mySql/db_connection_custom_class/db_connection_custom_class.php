<?php 
namespace MyCustomConnection;

use PDO;

/* trying to use class to reduce repeation of code */
class CustomConnection{
    public $servername = "localhost";
    public $dbname = "learningphp";
    public $username = "root";
    public $pass = "";

    // db connection and show success message
    public static function connection($servername, $dbname, $username=null, $pass=null)
    {
        // pdo connection set
        $connection = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pass);
         // pdo errormode to exception
         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<h4 style='color:green'>Successfully connected!</h4>";
        return $connection;

       
    }

    // recive catch exception and show custom style message
    public static function errorCatch($e){
        echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
    }
    // public function connection($servername, ){
      
    // }


}
?>
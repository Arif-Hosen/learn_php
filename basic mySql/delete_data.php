<!-- delete - used to delete data. we need to specify which data will be delete by where clause. If we forget to use where clause all records in table will be deleted.  -->
<?php 
include_once('.\db_connection_custom_class\db_connection_custom_class.php');
use MyCustomConnection\CustomConnection as Connection;

try{
    //  my custom db connection class used
    $connection =  Connection::connection("localhost","learningphp","root");

    $statement =  $connection->prepare("DELETE FROM employees WHERE id = 5");
    $statement->execute();


}
catch(PDOException $e){
    Connection::errorCatch($e);
}



?>
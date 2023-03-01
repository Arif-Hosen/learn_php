<!-- where clause - used to get conditionally matched data -->
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

    $statement = $connection->prepare("SELECT name, id, phone, address FROM EMPLOYEES WHERE(name = 'Arif Hosen')");
    $statement->execute();

    // var_dump( $statement->setFetchMode(PDO::FETCH_ASSOC));
    // var_dump($statement->fetchAll());
    $datas = json_encode($statement->fetchAll());
    echo "<h4 style='color:green'>Successfully Data Retrieve!</h4>";
    echo "<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    </thead>
    <tbody>";
    foreach(json_decode($datas) as $key => $val ){
        echo " <tr>
        <td style='border: solid 1px black;'> $val?->id
        </td>
        <td style='border: solid 1px black;'> $val?->name
        </td>
       
        <td style='border: solid 1px black;'> $val?->phone
        </td>
        </tr>
        ";
    }
       
   echo " </tbody>
   </table>";
    echo "<h4 style='color:green'>Successfully Data Retrieve!</h4>";
} catch (PDOException $e) {
    echo "<h4 style='color:red'>{$e->getMessage()}</h4>";
}
?>
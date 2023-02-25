<?php 
$servername = "localhost";
$dbname = "learningphp";
$username = "root";
$pass = "";

try {
    $connection = new PDO("mysql:host=$servername; dbname=$dbname", $username, $pass);

    // pdo errormode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->prepare("SELECT id, name, email, phone FROM EMPLOYEES");
    $statement->execute();

    // $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
     $datas = json_encode($statement->fetchAll());
    // echo "Data = ",var_dump($datas);

   echo "<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    </thead>
    <tbody>";
    foreach(json_decode($datas) as $key => $val ){
        echo " <tr>
        <td style='border: solid 1px black;'> $val->id
        </td>
        <td style='border: solid 1px black;'> $val->name
        </td>
        <td style='border: solid 1px black;'> $val->email
        </td>
        <td style='border: solid 1px black;'> $val->phone
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
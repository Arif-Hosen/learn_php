<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>PHP Super Global variabl $_POST Testing</h3>
    <p>It is used to collect data after submitting form data</p>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="">User Name</label>
        <input type="text" name="user_name" placeholder="Enter User Name" id="">
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php
echo "<h4 style='color:green'>{$_SERVER["REQUEST_METHOD"]}</h5>";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<h4 style='color:salmon'>Form data usign POST variable, user name = ","<span style='color:blue'>",$_POST['user_name'],"</span>","</h4>";
}

?>
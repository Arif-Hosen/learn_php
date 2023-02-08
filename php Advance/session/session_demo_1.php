<?php 
// initialize session at the beginning
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo 1</title>
</head>
<body>
    <!-- set session-->
    <?php 
    session_destroy();
    // session_unset();
    $_SESSION['username'] = 'Arif Hosenn';
    $_SESSION['age'] = 25;
    echo "Session variable are set",'<br>';
    echo $_SESSION['username'],'<br>';
    
    ?>

</body>
</html>
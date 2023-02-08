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
    <title>Document</title>
</head>
<body>
    <a href="./session_demo_1.php">Demo session 1</a>
    <?php 
    echo "Get user name from demo session 1 file , Username = ", $_SESSION['username'],'<br>';
    echo "Get user Age from demo session 1 file , Age = ", $_SESSION['age'],'<br>';
    echo print_r($_SESSION);
    ?>
    <!-- <h3></h3> -->
    <script>
        let userName = "<?php echo $_SESSION['username'];?>";
        sessionStorage.setItem('User name',userName);
        console.log(userName);
    </script>
</body>
</html>
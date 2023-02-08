<?php
// cookie - used to identifies a user. It's a file which the server embeded on the user computer. Every request time, browser send cookie file to server. We can create and retrive cookie.

$cookie_name = 'user';
$cookie_value = 'Arif Hosen';
setcookie($cookie_name, $cookie_value, time() + 3600,'/' ); //3600 sec = 1 day *cookie is available for 1 day
// echo $test;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Learning</title>
</head>
<body>
    <?php 
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named ", $cookie_name,' is not set', '<br>';
    }
    else{
        echo "Cookie named ",$cookie_name, ' is set', '<br>';
        echo "Cookie Value is  = ",$_COOKIE[$cookie_name], '<br>';
    }
    ?>
</body>
</html>
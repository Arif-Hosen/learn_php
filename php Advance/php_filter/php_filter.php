<?php
$name = "<h2>Arif Hosen</h2>";
echo $name, '<br>';
// remove the html tag
$filter_name = filter_var($name,FILTER_SANITIZE_STRING);
echo $filter_name, '<br>';

// integer validation
$age = 9;
if(filter_var($age, FILTER_VALIDATE_INT)){
    echo "Integer variable", '<br>';
}
else{
    echo "Not integer variable", '<br>';
}
// for interger 0
$age2 = 0;
if(filter_var($age2, FILTER_VALIDATE_INT) === 0 || !filter_var($age2, FILTER_VALIDATE_INT) === false){
    echo "Integer variable", '<br>';
}
else{
    echo "Not integer variable", '<br>';
}

// validate IP address
$ip = "12.32.7.0";
if(filter_var($ip, FILTER_VALIDATE_IP)){
    echo "IP is validate ", $ip, '<br>';
}
else{
    echo "IP is not validate ", $ip, '<br>';
}

// sanitize and validate email address (sanitize - means remove extra feature of that variable)
$email = "a@gmail.c";
// sanitize
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Eamil is validate ", $email, '<br>';
}
else{
    echo "Email is not validate ", $email, '<br>';
}

// sanitize and validate url
$url = "https://www.abc.com";
// sanitize
$url = filter_var($url, FILTER_SANITIZE_URL);
// echo $url;

if(filter_var($url, FILTER_VALIDATE_URL)){
    echo "URL is validate ", $url, '<br>';
}
else{
    echo "URL is not validate ", $url, '<br>';
}
?>
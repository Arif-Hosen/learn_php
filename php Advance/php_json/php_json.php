<?php
// json - data format, used to store and exchange data(client side to server side)

// php associative array to json convert
$data = ['arif'=> 40, 'arman'=> 33, 'sofik' =>45];
$json_data = json_encode($data);
echo "Json data = ", $json_data;
// var_dump($json_data);

// json_decode() - json to php array. return object. if we define 2nd parameter true, return php associative array
$php_data = json_decode($json_data);
var_dump($php_data);
echo $php_data->arif ,'<br>';
$php_data = json_decode($json_data,true);
var_dump($php_data);

// accessing decoding json
echo $php_data['arif'],'<br>';
?>
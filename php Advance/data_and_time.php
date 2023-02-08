<h3>PHP Date and Time</h3>

<?php 
date_default_timezone_set('Asia/Dhaka');
echo date('d-m-Year') , '<br>';
echo date('h-i-sa'), '<br>';

// string to time
$time = strtotime("+2 Saturday");
echo date('d-m-Year',$time);
?>
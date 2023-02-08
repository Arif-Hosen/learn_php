<?php
echo "Recive data from another file, super global variable request <br>";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<h4 style='color:salmon'>Form data, user name = ","<span style='color:blue'>",$_REQUEST['user_name'],"</span>","</h4>";
}
?>
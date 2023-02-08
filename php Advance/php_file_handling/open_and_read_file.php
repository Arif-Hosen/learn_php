<?php 
// file open
$fileOpen = fopen('test_reading.txt','r') ;
echo "File open output = ", $fileOpen, '<br>';
// file read
$fileRead = fread($fileOpen,filesize('test_reading.txt'));
echo "File read output = ", $fileRead, '<br>';
// file close
fclose($fileOpen);
// get single line
$fileOpen = fopen('test_reading.txt','r') ;
$getSingleLine = fgets($fileOpen);
echo "File get single line output = ", $getSingleLine, '<br>';

// end of file
while(!feof($fileOpen)){
    $getSingleLine = fgets($fileOpen);
    echo "End Of File check output = ", $getSingleLine, '<br>';
}

// get single character
$fileOpen = fopen('test_reading.txt','r') ;
$getSingleCharacter = fgetc($fileOpen);
echo "File get single character output = ", $getSingleCharacter, '<br>';



?>
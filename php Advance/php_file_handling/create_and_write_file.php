<?php
// file create
$fileCreate = fopen('test_createFile.txt','w');
echo $fileCreate, '<br>';

// file write
$fileCreateForWrite = fopen('test_write.txt','w');
$sentence = "Walking in the morning is the best solution for healthy life. ";
$fileWrite = fwrite($fileCreateForWrite,$sentence);
fclose($fileCreateForWrite);

$fileRead = fopen('test_write.txt','r');
echo fread($fileRead,filesize('test_write.txt')), '<br>';
fclose($fileRead);

// file data override
$existingFile = fopen('test_write.txt','a');
$sentence2 = 'Hello winter';
$fileOverrite = fwrite($existingFile, $sentence2);
fclose($existingFile);
$fileRead2 = fopen('test_write.txt','r');
echo "File override = ", fread($fileRead2, filesize('test_write.txt')), '<br>';
?>
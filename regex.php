<?php
// preg_match()
$sentence1 = "There are no reason to suspect him";
if(preg_match('/reason/i',$sentence1)){
    echo "Pattern matched, output =", preg_match('/reason/i',$sentence1), '<br>';
}
else{
    echo "Pattren does not exists in sentence1", '<br>';
}

// preg_match_all() - return number of matched pattern
$sentence2 = "There are no reason to suspect him. So without reason, we do nothing.";
if(preg_match_all('/reason/i',$sentence2)){
    echo "Pattern matched, output =", preg_match_all('/reason/i',$sentence2), '<br>';
}
else{
    echo "Pattren does not exists in sentence2", '<br>';
}

// preg_replace() - return number of matched pattern
$sentence3 = "There are no reason to suspect him. So without reason, we do nothing.";
if(preg_replace('/reason/i',$sentence3, 'matter')){
    echo "Pattern matched, output =", preg_replace('/reason/i',$sentence3,'matter'), '<br>';
}
else{
    echo "Pattren does not exists in sentence3", '<br>';
}
?>
<?php
function multify($n){
    $mul = $n * $n;
    return $mul;
}
$arr = [4, 6 ,7];
$result = array_map('multify', $arr);
print_r( $result);

// annonymous function as callback function 
$result2 = array_map(function($num){
    $sum = $num + $num; 
    return $sum;
},$arr);

print_r($result2);

// callback function use in user-defined function
function resultMessage($cgpa){
    if($cgpa > 3.50){
        return "Great Result";
    }
    else{
        return "Good Result";
    }
}

function cgpaAssessment($cgpa, $mssg){
    $getMssg = $mssg($cgpa);
    return $getMssg;
}

$result3= cgpaAssessment(3.30, 'resultMessage');
echo "Result = ", $result3;
?>
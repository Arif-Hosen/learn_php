
<?php
$car = 'bmw';

// switch($car){
//     case 'mercedez':
//         echo "Mercedez";
//         break;
//     case 'toyota':
//         echo "toyota";
//         break;
//     case $car:
//         $car .= ' Favourite'; 
//         echo $car;
//         break;
//     default:
//         echo "Audi";
// }
// $a = 1;


function test($a){
    switch($a){
        case 'zero':
            echo 0;
            break;
        case 'one':
            echo 1;
            break;
        case 'two':
             
            echo 2;
            break;
        default:
            echo 5;
    }
}
test('zeroone');

// trying js  variable assign to php varible 
$numberInText = 'rr';
$tt = 'rd';
echo "<br> <input id='text-number' onChange='textToNumber()' type='text'/>";

echo "<script>

let jsValue= null;
function textToNumber(){
// let arman = 220;
jsValue = document.getElementById('text-number').value;
}
</script>";


$numberInText = "<script>
    document.writeln(jsValue);
</script>";

// if($numberInText)
echo ($tt == $numberInText) ? "js variable = ":$numberInText;   


?>


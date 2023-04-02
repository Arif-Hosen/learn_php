<?php
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get q data from url after submitting the html form

$str = $_REQUEST['q'];
// echo $str;

$suggestList = "";

// if query parameter q is not empty, the process will going on
if($str != ""){
    $str = strtolower($str);
    $len = strlen($str);

    // find the query string or substring from array of string or substring. if string/substring matched, assing to the suggestList and if find string from another element append it to the string to suggestList.
    foreach($a as $book){
        if(stristr($str, substr($book, 0, $len))){
            // suggestList is empty
            if($suggestList == ""){
                $suggestList = $book;
            }
            else{
                $suggestList = $suggestList.", $book";
            }
        }
    }
}

echo $suggestList == "" ? "Not Found" : $suggestList;
// var_dump($arr);
?>
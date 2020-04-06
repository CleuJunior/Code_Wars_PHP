<?php



//$divisors = function($num){
//    $count = 0;
//    for ($i = 1; $i <= $num; $i++){
//        if ($num % $i == 0) $count++;
//    }
//
//    return $count;
//
//};
//
//var_dump($divisors(64));


$n = 19873;
$nN = strval ($n);

$nN = str_split($nN);
rsort($nN);
var_dump($nN);




//$str = 'take me to semynak';
//$str = strrev($str);
//$str = explode(" ", $str);
//sort($str);
//
//foreach ($str as $value){
//    echo " " . strrev($value);
//}

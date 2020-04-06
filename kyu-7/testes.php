<?php



$divisors = function(int $num): int{
    $count = 0;
    for ($i = 1; $i <= $num; $i++){
        if ($num % $i == 0) $count++;
    }

    return $count;

};

var_dump($divisors(64));







//$str = 'take me to semynak';
//$str = strrev($str);
//$str = explode(" ", $str);
//sort($str);
//
//foreach ($str as $value){
//    echo " " . strrev($value);
//}

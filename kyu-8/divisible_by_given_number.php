<?php

/*
Complete the function which takes two arguments and returns all numbers which are divisible by the given divisor.
First argument is an array of numbers and the second is the divisor.

Example
divisible_by([1, 2, 3, 4, 5, 6], 2) == [2, 4, 6]

*/

function divisibleBy($numbers, $divisor) {
    $array = array();
    foreach ($numbers as $key){ 
        if($key % $divisor == 0) $array[] = $key;
    }
    
    return $array;
}

/*
    ----TESTE----
*/



var_dump(divisibleBy([1, 2, 3, 4, 5, 6], 2)) . PHP_EOL; // [2, 4, 6]
var_dump(divisibleBy([1, 2, 3, 4, 5, 6], 3)) . PHP_EOL; // [3, 6]
var_dump(divisibleBy([0, 1, 2, 3, 4, 5, 6], 4)) . PHP_EOL; //[0, 4]
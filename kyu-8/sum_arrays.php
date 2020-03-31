<?php

/*
Write a method sum (sum_array in python, sumarray in julia, SumArray in C#) that takes an array
of numbers and returns the sum of the numbers. These may be integers or decimals for Ruby and
any instance of Num for Haskell. The numbers can also be negative. If the array does not
contain any numbers then you should return 0.

Examples
sum([1, 5.2, 4, 0, -1]); // => 9.2

*/

function sum(array $a): float {
    $sum = 0.0;
    for ($i=0; $i < count($a) ; $i++) { 
        $sum += $a[$i];
    }
    return $sum;
}

/*
    ----TESTE----
*/

$sum = array(1, 5.2, 4, 0, -1);

print_r(sum($sum));
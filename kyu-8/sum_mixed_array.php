<?php

/*
Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

Return your answer as a number.
*/

function sum_mix($a) {
   $sum = 0;
   foreach ($a as $b) {
       $sum += $b;
   }
   
   return $sum;
}

/*
    ----TESTE----
*/

echo sum_mix([9, 3, '7', '3']) . "<br>"; // 22
echo sum_mix(['5', '0', 9, 3, 2, 1, '9', 6, 7]) . "<br>"; // 42
echo sum_mix(['3', 6, 6, 0, '5', 8, 5, '6', 2, '0']) . "<br>"; // 41
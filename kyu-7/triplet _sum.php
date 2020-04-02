<?php
/*
 * Task
 * Given an array/list [] of n integers , find maximum triplet sum in the array Without duplications .
 */

function maxTriSum($nums) {
   sort($nums);
   $array1= (array_unique($nums));
   $sum = 0;
   for($i = 0; $i < 3; $i++) {
    $sum += array_pop($array1);

   }
   return $sum;
}

/*
    ----TESTE----
*/


var_dump(maxTriSum([-7, 12, -7, 29, -5, 0, -7, 0, 0, 29])); // 41
var_dump(maxTriSum([-13, -50, 57, 13, 67, -13, 57, 108, 67])); // 232
var_dump(maxTriSum([-5, -1, -9, 0, 2])); // 1
<?php

/*
 * Given a 2D array of size m * n. Your task is to find the sum of minimum value in each row.

 * For Example:

 * [
 * [1, 2, 3, 4, 5],       # minimum value of row is 1
 * [5, 6, 7, 8, 9],       # minimum value of row is 5
 * [20, 21, 34, 56, 100]  # minimum value of row is 20
 * ]
 * So, the function should return 26 because sum of minimums is as 1 + 5 + 20 = 26
 * Note: You will be always given non-empty array containing Positive values.
 */

function sum_of_minimums($numbers)
{
    $sum = 0;
    foreach ($numbers as $key => $value) {
        sort($value);
        $sum += $value[0];

    }

    return $sum;
}


/*
    ----TESTE----
*/

var_dump(sum_of_minimums([[ 7,9,8,6,2 ], [6,3,5,4,3], [6,3,5,4,3]])); // 9
var_dump(sum_of_minimums([[11,12,14,54], [67,89,90,56], [7,9,4,3], [9,8,6,7]])); // 76


<?php

/*
 * Given the triangle of consecutive odd numbers:
 *
 *              1
 *           3     5
 *        7     9    11
 *    13    15    17    19
 * 21    23    25    27    29
 * ...
 * Calculate the row sums of this triangle from the row index (starting at index 1) e.g.:
 * rowSumOddNumbers(1); // 1
 * rowSumOddNumbers(2); // 3 + 5 = 8
 */


function rowSumOddNumbers($n) {
    return $totalSum = ($n**2) * $n;
}

/*
    ----TESTE----
*/

var_dump(rowSumOddNumbers(74)); // 405224
var_dump(rowSumOddNumbers(86)); // 636056
var_dump(rowSumOddNumbers(93)); // 804357
var_dump(rowSumOddNumbers(101)); // 1030301
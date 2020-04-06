<?php

/*
 * Count the number of divisors of a positive integer n.
 */

function divisors($n) {
    $count = 0;
    for ($i = 1; $i <= $n; $i++){
        if ($n % $i == 0) $count++;
    }

    return $count;
}

/*
    ----TESTE----
*/

var_dump(divisors(11)); // 2
var_dump(divisors(54)); // 8
var_dump(divisors(64)); // 7
<?php

/*
Given a number n, return the number of positive odd numbers below n!

oddCount(7) //=> 3, i.e [1, 3, 5]
oddCount(15) //=> 7, i.e [1, 3, 5, 7, 9, 11, 13]

*/

function oddCount($n) {
    $count = 0;
    for($i = 1; $i < $n; $i+=2){         
        $count++; 
                 
    }
    return $count; 
}

$n = 15;

var_dump(oddCount($n));


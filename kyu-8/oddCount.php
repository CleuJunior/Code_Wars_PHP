<?php

/*
Given a number n, return the number of positive odd numbers below n!

oddCount(7) //=> 3, i.e [1, 3, 5]
oddCount(15) //=> 7, i.e [1, 3, 5, 7, 9, 11, 13]

*/

function oddCount($n) { 
    return floor($n / 2); 
}

$n = 15;

var_dump(oddCount($n));


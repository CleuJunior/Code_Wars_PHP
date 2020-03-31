<?php

/*
Your inputs: a positive integer, n, greater than or equal to one. n is provided, you have NO CONTROL over its value.

Your expected output is an array of positive integers from 1 to n (inclusive).

Your job is to write an algorithm that gets you from the input to the output.
*/

function pre_fizz($n) {
    for ($i=0; $i <$n ; $i++) { 
        $arrayfora[$i] = $i +1;
  
    }
    return $arrayfora; 
}

print_r(pre_fizz(10));

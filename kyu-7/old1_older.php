<?php

/*
 * The two oldest ages function/method needs to be completed. It should take an array of numbers as its argument and
 * return the two highest numbers within the array. The returned value should be an array in the format
 * [second oldest age, oldest age].
 * The order of the numbers passed in could be any order. The array will always include at least 2 items.

For example:

two_oldest_ages( 4, {1, 2, 10, 8} ) // should return {8, 10}
 *
 */

function twoOldestAges($ages) {
    sort($ages);
    return [$ages[count($ages)-2],$ages[count($ages)-1]];
}

/*
    ----TESTE----
*/


var_dump(twoOldestAges([1,5,87,45,8,8])) . "<br>";  // [45, 87]
var_dump(twoOldestAges([6,5,83,5,3,18])) . "<br>"; // [18, 83]
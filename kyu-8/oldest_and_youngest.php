<?php

/*
At the annual family gathering, the family likes to find the oldest living family member’s age and the youngest
family member’s age and calculate the difference between them.

You will be given an array of all the family members' ages, in any order. The ages will be given in
whole numbers, so a baby of 5 months, will have an ascribed ‘age’ of 0.
Return a new array with [youngest age, oldest age, difference between the youngest and oldest age].


*/

function differenceInAges($ages) {
    array_multisort($ages);
    $returnArray = array($ages[0], $ages[count($ages) -1], ($ages[count($ages)-1] - $ages[0]));
    return $returnArray;

}
/*
    ----TESTE----
*/

var_dump(differenceInAges([82, 15, 6, 38, 35])); // [6, 82, 76]
var_dump(differenceInAges([57, 99, 14, 32])); // [14, 99, 85]
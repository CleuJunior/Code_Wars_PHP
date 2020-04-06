<?php

/*
 * Task
 * Given a number , Return _The Maximum number _ could be formed from the digits of the number given.
 * Notes
 * Only Natural numbers passed to the function , numbers Contain digits [0:9] inclusive !alt !alt
 * Digit Duplications could occur , So also consider it when forming the Largest !alt
 * Input >> Output Examples:
 * maxNumber (213) ==> return (321)
 */

function maxNumber($n) {
    $numbString = strval($n);
    $numbString = str_split($numbString);
    rsort($numbString);
    $numbString = implode("", $numbString);
    return intval($numbString);
}


/*
    ----TESTE----
*/

var_dump(maxNumber(63792)); // 97632
var_dump(maxNumber(566797)); // 977665
var_dump(maxNumber(1000000)); // 1000000
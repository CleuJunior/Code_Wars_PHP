<?php

/*
 * Your task is to remove all duplicate words from a string, leaving only single (first) words entries.

Example:

Input:

'alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta'

Output:

'alpha beta gamma delta'
 *
 */


function removeDuplicateWords($s) {
    $array = explode(" ", $s);
    $newArray = array_unique($array);
    $str = "";
    for ($i = 0; $i < count($newArray); $i++){
    $str = implode(" ",$newArray);

    }
    return $str;
}

/*
    ----TESTE----
*/

echo removeDuplicateWords('alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta');

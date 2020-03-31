<?php

/*
Task
Create a method is_uppercase() to see whether the string is ALL CAPS. For example:

is_uppercase("HELLO I AM DONALD") == true
is_uppercase("ACSKLDFJSgSKLDFJSKLDFJ") == false
is_uppercase("ACSKLDFJSGSKLDFJSKLDFJ") == true

In this Kata, a string is said to be in ALL CAPS whenever it does not contain any lowercase letter so any string
containing no letters at all is trivially considered to be in ALL CAPS.

*/

function is_uppercase($str) {
    $compare = strtoupper($str);
    return ($compare == $str)? true : false;
}

/*
    ----TESTE----
*/


echo is_uppercase('c'); // false
echo is_uppercase('C'); //true
echo is_uppercase('hello I AM DONALD'); //false
echo is_uppercase ('HELLO I AM DONALD'); //true
echo is_uppercase('ACSKLDFJSgSKLDFJSKLDFJ'); //false
echo is_uppercase('ACSKLDFJSGSKLDFJSKLDFJ'); //true
echo is_uppercase('Hello World'); // false
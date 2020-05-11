<?php

//Exclamation marks series #4: Remove all exclamation marks from sentence but ensure a exclamation mark
//at the end of string

//Description:
//Remove all exclamation marks from sentence but ensure a exclamation mark at the end of string.
//For a beginner kata, you can assume that the input data is always a non empty string, no need to verify it.

//Examples

//remove("Hi!") === "Hi!"
//remove("Hi!!!") === "Hi!"
//remove("!Hi") === "Hi!"
//remove("!Hi!") === "Hi!"
//remove("Hi! Hi!") === "Hi Hi!"
//remove("Hi") === "Hi!"

function remove(string $s): string {
    return  $s = str_replace("!", "", $s) . "!";
}

echo remove("Hi!") .PHP_EOL;
echo remove("Hi!!!") .PHP_EOL;
echo remove("!Hi") .PHP_EOL;
echo remove("!Hi!") .PHP_EOL;
echo remove("Hi! Hi!") .PHP_EOL;
echo remove("Hi") .PHP_EOL;
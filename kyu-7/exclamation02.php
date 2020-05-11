<?php

//Description:
//Remove a exclamation mark from the end of string. For a beginner kata, you can assume that the input
// data is always a string, no need to verify it.

//Examples

//remove("Hi!") === "Hi"
//remove("Hi!!!") === "Hi!!"
//remove("!Hi") === "!Hi"
//remove("!Hi!") === "!Hi"
//remove("Hi! Hi!") === "Hi! Hi"
//remove("Hi") === "Hi"


function remove(string $s): string {
    return (substr($s, strlen($s)-1) === "!")? substr($s, 0, strlen($s)-1) : $s;
}

echo remove("Hi!") . PHP_EOL;
echo remove("Hi!!!") . PHP_EOL;
echo remove("!Hi") . PHP_EOL;
echo remove("!Hi!") . PHP_EOL;
echo remove("Hi! Hi!") . PHP_EOL;
echo remove("Hi") . PHP_EOL;


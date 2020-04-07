<?php
/*
 * Palindrome strings
 * A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward
 * or forward. This includes capital letters, punctuation, and word dividers.
 * Implement a function that checks if something is a palindrome.

 * Examples:
 * isPalindrome("anna")   ==> true
 * isPalindrome("walter") ==> false
 * isPalindrome(12321)    ==> true
 * isPalindrome(123456)   ==> false

 */




function is_palindrome($line) {
    $newLine = strrev($line);

    return $newLine == $line;

}

/*
    ----TESTE----
*/

var_dump(is_palindrome("anna"));    // true
var_dump(is_palindrome("walter")); // false
var_dump(is_palindrome(12321));    // true
var_dump(is_palindrome(123456));   // false
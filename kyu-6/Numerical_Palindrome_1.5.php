<?php

// Desafio: https://www.codewars.com/kata/58e09234ca6895c7b300008c/train/php

function palindrome($num, $s) {
    if(gettype($num) !== "integer" || gettype($s) !== "integer" || $num < 0) return "Not valid";
    $palindromeArray = [];
    $revNum = $num;
    while (count($palindromeArray) < $s) {
      if (strrev($revNum) == $revNum && strlen($revNum) > 1) $palindromeArray[] = $revNum;
      $revNum++;
    }
    return $palindromeArray;
}

use PHPUnit\Framework\TestCase;

class NumericalPalindrome1Point5Test extends TestCase {
    public function testExamples() {
      $this->assertEquals([11, 22, 33, 44], palindrome(6, 4));
      $this->assertEquals([77], palindrome(75, 1));
      $this->assertEquals([22, 33, 44], palindrome(19, 3));
      $this->assertEquals([101, 111], palindrome(101, 2));
      $this->assertEquals("Not valid", palindrome("ACCDDCCA", 3));
      $this->assertEquals("Not valid", palindrome(773, "1551"));
      $this->assertEquals("Not valid", palindrome(-4505, 15));
    }
}


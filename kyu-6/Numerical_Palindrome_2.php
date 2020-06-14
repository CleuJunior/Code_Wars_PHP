<?php

// Desafio: https://www.codewars.com/kata/58de819eb76cf778fe00005c/train/php

function palindrome($num)
{   
    if (gettype($num) !== 'integer' || $num < 0) return 'Not valid';  
    if (strlen($num) > 1 && $num == strrev($num)) return true;    
    for ($indexI = 0; $indexI < strlen($num); $indexI++) {
        for ($indexJ = 2; $indexJ < strlen($num); $indexJ++) {
            $palindrome = substr($num, $indexI, $indexJ);
            if (strlen($palindrome) > 1 && $palindrome == strrev($palindrome)) {
            return true;
        }
      }     
    }    
    return false;
}

use PHPUnit\Framework\TestCase;


class NumericalPalindrome2Test extends TestCase {
    public function testExamples()
    {
      $this->assertFalse(palindrome(2));
      $this->assertTrue(palindrome(123322367));
      $this->assertTrue(palindrome(1551));
      $this->assertFalse(palindrome(13598));
      $this->assertEquals("Not valid", palindrome("ACCDDCCA"));
      $this->assertEquals("Not valid", palindrome("1551"));
      $this->assertEquals("Not valid", palindrome(-4505));
    }
}

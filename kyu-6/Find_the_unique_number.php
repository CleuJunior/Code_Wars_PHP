<?php

// Desafio: https://www.codewars.com/kata/585d7d5adb20cf33cb000235/train/php

function find_uniq($a) {
    $diff = 0;
    for ($indexI= 0; $indexI < count($a) ; $indexI++) { 
        if($a[$indexI] != $a[$indexI+1]) return $diff = $a[$indexI+1];
    }
  
    return $diff;
}


use PHPUnit\Framework\TestCase;



class FindUniqTest extends TestCase {
    public function testExamples() {
      $this->assertEquals(2, find_uniq([1, 1, 1, 2, 1, 1]));
      $this->assertEquals(0.55, find_uniq([0, 0, 0.55, 0, 0]));
      $this->assertEquals(1, find_uniq([0, 1, 0]));
    }
  }


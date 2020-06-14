<?php

// Desafio: https://www.codewars.com/kata/585d7d5adb20cf33cb000235/train/php

function find_uniq($a) {
    sort($a);
    return $a[0] == $a[1] ? end($a) : $a[0];
}


use PHPUnit\Framework\TestCase;



class FindUniqTest extends TestCase {
    public function testExamples() {
      $this->assertEquals(2, find_uniq([1, 1, 1, 2, 1, 1]));
      $this->assertEquals(0.55, find_uniq([0, 0, 0.55, 0, 0]));
      $this->assertEquals(1, find_uniq([0, 1, 0]));
    }
  }


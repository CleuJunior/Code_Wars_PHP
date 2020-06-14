<?php



function hamming_distance(string $r, string $s): int {
  $arrayStringR = str_split($r);
  $arrayStringS = str_split($s);
  $aux = 0;
  for ($i=0; $i < count($arrayStringR) ; $i++) {     
    if($arrayStringR[$i] != $arrayStringS[$i]) $aux++;
  }

  return $aux;
}

use PHPUnit\Framework\TestCase;


class HammingDistanceTest extends TestCase {
    public function testDescriptionExamples() {
      $this->assertEquals(2, hamming_distance('100101', '101001'));
      $this->assertEquals(4, hamming_distance('1010', '0101'));
    }
  }
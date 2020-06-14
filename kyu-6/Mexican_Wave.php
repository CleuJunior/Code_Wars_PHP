<?php

// Desafio: codewars.com/kata/58f5c63f1e26ecda7e000029/train/php

function wave($people){
    $wave_maxicam = [];
    $index = 0;
    for ($i=0; $i < strlen($people) ; $i++) {
        if($people !== substr($people, 0, $i) . ucfirst(substr($people, $i))){
            $wave_maxicam[$index] = substr($people, 0, $i) . ucfirst(substr($people, $i));
            $index++;
        }

    }

    
  return $wave_maxicam;
}


use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    public function testThatSomethingShouldHappen() {
      $this->assertEquals(["Hello", "hEllo", "heLlo", "helLo", "hellO"], wave("hello"));
      $this->assertEquals(["Codewars", "cOdewars", "coDewars", "codEwars", "codeWars", "codewArs", "codewaRs", "codewarS"], wave("codewars"));
      $this->assertEquals([], wave(""));
      $this->assertEquals(["Two words", "tWo words", "twO words", "two Words", "two wOrds", "two woRds", "two worDs", "two wordS"], wave("two words"));
      $this->assertEquals([" Gap ", " gAp ", " gaP "], wave(" gap "));
    }
}
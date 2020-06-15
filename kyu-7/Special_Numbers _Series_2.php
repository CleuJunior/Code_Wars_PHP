<?php

// Desafio: https://www.codewars.com/kata/5a4d303f880385399b000001/train/php

function factorial($numFac){
    if($numFac < 2) return 1;
    return $numFac * factorial($numFac -1);
}

function strong($n) {
    $strong = 0;
    $arr = str_split($n);
    for($index = 0; $index < count($arr); $index++){
        $strong += factorial($arr[$index]);
    }

    return $strong == $n ? "STRONG!!!!" : "Not Strong !!";

}


use PHPUnit\Framework\TestCase;

class MyTestCases extends TestCase {
    public function testFixedTests() {
        $this->assertEquals("STRONG!!!!", strong(1));
        $this->assertEquals("STRONG!!!!", strong(2));
        $this->assertEquals("STRONG!!!!", strong(145));
        $this->assertEquals("STRONG!!!!", strong(40585));
        $this->assertEquals("Not Strong !!", strong(7));
        $this->assertEquals("Not Strong !!", strong(93));
        $this->assertEquals("Not Strong !!", strong(185));
    }
}


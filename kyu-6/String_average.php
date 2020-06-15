<?php

// Desafio: https://www.codewars.com/kata/5966847f4025872c7d00015b/train/php


function average_string(string $s): string
{
    if (empty($s)) return 'n/a';
    $total = 0;

    $arrayNum = [
        'zero' => 0,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
    ];

    $sarray = explode(' ', $s);

    foreach ($sarray as $num) {
        if (!isset($arrayNum[$num])) return 'n/a';
        $total += $arrayNum[$num];
    }

    $media = (int)floor($total/count($sarray));
    return array_search($media, $arrayNum, true);


}

use PHPUnit\Framework\TestCase;

class AverageStringTest extends TestCase {
    public function testFixed() {
        $this->assertEquals("four", average_string("zero nine five two"));
        $this->assertEquals("three", average_string("four six two three"));
        $this->assertEquals("three", average_string("one two three four five"));
        $this->assertEquals("four", average_string("five four"));
        $this->assertEquals("zero", average_string("zero zero zero zero zero"));
        $this->assertEquals("two", average_string("one one eight one"));
        $this->assertEquals("n/a", average_string(""));
    }
}


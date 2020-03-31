<?php

/*
There was a test in your class and you passed it. Congratulations!
But you're an ambitious person. You want to know if you're better than the average student in your class.

You receive an array with your peers' test scores. Now calculate the average and compare your score!

Return True if you're better, else False!

Note:
Your points are not included in the array of your class's points. For calculating the 
average point you may add your point to the given array!
*/

function betterThanAverage($classPoints, $yourPoints) {
    $media = 0;
    for ($i=0; $i < count($classPoints) ; $i++) { 
        $media += $classPoints[$i];
    }
    if($media / count($classPoints) < $yourPoints) return true;
    
    return false;
    
}

/*
    ----TESTE----
*/

echo betterThanAverage([2, 3], 5) . PHP_EOL; //true(1)
echo betterThanAverage([100, 40, 34, 57, 29, 72, 57, 88], 75) . PHP_EOL; //true(1)
echo betterThanAverage([12, 23, 34, 45, 56, 67, 78, 89, 90], 69) . PHP_EOL; //true(1)
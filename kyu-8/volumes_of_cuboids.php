<?php

/*
In this simple exercise, you will create a program that will take two lists of integers, a and b.
Each list will consist of 3 positive integers above 0, representing the dimensions of cuboids a and b.
You must find the difference of the cuboids' volumes regardless of which is bigger.

For example, if the parameters passed are ([2, 2, 3], [5, 4, 1]), the volume of a is 12 and the volume of b is 20.
Therefore, the function should return 8.

Your function will be tested with pre-made examples as well as random ones.
*/


function findDifference($a, $b) {
    $resultA = 1;
    $resultB = 1;
    $resultC = 0;
   for ($i=0; $i < count($a) ; $i++) { 
    $resultA *= $a[$i];
    $resultB *= $b[$i];
    
   }   
   return $resultC = abs($resultA - $resultB);
}

/*
    ----TESTE----
*/

echo findDifference([9, 7, 2], [5, 2, 2]) . "<br>"; //106
echo findDifference([11, 2, 5], [1, 10, 8]) . "<br>"; //30
echo findDifference([4, 4, 7], [3, 9, 3]) . "<br>"; //31
echo findDifference([2, 2, 3], [5, 4, 1]) . "<br>"; //8
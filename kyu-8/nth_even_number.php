<?php

/*
    Return the Nth Even Number
*/

function nthEven($n) {
   if($n == 1) return 0;
   return $n * 2 - 2;
}


/*
    ----TESTE----
*/


echo nthEven(1) . "<br>"; // 0
echo nthEven(2) . "<br>"; // 2;
echo nthEven(3) . "<br>"; // 4;
echo nthEven(100) . "<br>"; // 198;
echo nthEven(1298734) . "<br>"; // 2597466
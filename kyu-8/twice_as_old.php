<?php

/*
Your function takes two arguments:

current father's age (years)
current age of his son (years)
Сalculate how many years ago the father was twice as old as his son (or in how many years he will be twice as old).

*/

function twice_as_old($dad_years_old, $son_years_old) {
    if($dad_years_old - $son_years_old == $son_years_old) return 0;
    return abs($dad_years_old - ($son_years_old * 2));
 }


/*
    ----TESTE----
*/

echo twice_as_old(36,7) . "<br>"; // 22
echo twice_as_old(55,30) . "<br>"; // 5
echo twice_as_old(42,21) . "<br>"; // 0
echo twice_as_old(22,1) . "<br>"; // 20
echo twice_as_old(29,0) . "<br>"; // 29
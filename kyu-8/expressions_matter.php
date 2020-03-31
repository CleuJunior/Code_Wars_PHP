<?php

function expressionMatter($a, $b, $c) {
    $case1 = $a * ($b + $c);
    $case2 = $a * $b * $c;
    $case3 = $a + $b * $c;
    $case4 = ($a + $b) * $c;
    
    if($case1 >= $case2 && $case1 >= $case3 && $case1 >= $case4) return $case1;
    if($case2 >= $case1 && $case2 >= $case3 && $case2 >= $case4) return $case2;
    if($case3 >= $case2 && $case3 >= $case1 && $case3 >= $case4) return $case3;
    if($case4 >= $case2 && $case4 >= $case3 && $case4 >= $case1) return $case4;
    
}

/*
    ----TESTE----
*/



echo expressionMatter(5, 6, 1);
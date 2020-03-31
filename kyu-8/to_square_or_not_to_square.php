<?php

function squareOrSquareRoot($array) {
    $newArray = array();
    for ($i=0; $i < count($array) ; $i++) { 
        $newArray[$i] = floor(sqrt($array[$i]) * sqrt($array[$i]));
        if($newArray[$i] == $array[$i]){
            $array[$i] = $array[$i]  * $array[$i];
        }
        
    }        
  
    for ($j=0; $j < count($array); $j++) { 
        
    }
    
    return  $newArray;
  
}

/*
    ----TESTE----
*/

$array = array(4,3,9,7,2,1);
print_r(squareOrSquareRoot($array));

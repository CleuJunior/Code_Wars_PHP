<?php

/*
  Simple, given a string of words, return the length of the shortest word(s).
  String will never be empty and you do not need to account for different data types.

 */

function findShort($str){
    $arryString = explode(" ", $str);
    $arrayShort = array();
    for ($i = 0; $i < count($arryString); $i++){
        $arrayShort[$i] = strlen($arryString[$i]);
    }
    sort($arrayShort);

    return $arrayShort[0];
}


/*
    ----TESTE----
*/

echo findShort("bitcoin take over the world maybe who knows perhaps"). "<br>"; // 3
echo findShort("turns out random test cases are easier than writing out basic ones"). "<br>"; // 3

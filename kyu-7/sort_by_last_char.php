<?php

function last($x)
{
    $x = strrev($x);
    $x = explode(" ", $x);
    sort($x);
    $array = array();
    foreach ($x as $value){
        $array = [strrev($value)];
    }
    return $array;
}

var_dump(last("take me to semynak"));
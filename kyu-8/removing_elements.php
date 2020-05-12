<?php

// Take an array and remove every second element out of that array. Always keep the first element and
// start removing with the next element.

//Example:

//$array = ['Keep', 'Remove', 'Keep', 'Remove', ...];
//None of the arrays will be empty, so you don't have to worry about that

//    'in'  => ['hello', 'world', 'buy'],
//    'out' => ['hello', 'buy']

//    'in'  => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
//    'out' => [1, 3, 5, 7, 9]

//    'in'  => [1],
//    'out' => [1]



function removeEveryOther(array $array): array {
    $newArray[0] = $array[0];
    if(count($array) < 2) return $array;
    for ($index = 1; $index < count($array); $index++){
        if($index % 2 == 0) $newArray[$index] = $array[$index];
    }
    return $newArray;
}


print_r(removeEveryOther(['hello', 'world', 'buy']));
print_r(removeEveryOther([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
print_r(removeEveryOther([1]));
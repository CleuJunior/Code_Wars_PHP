<?php

/*
Make a function that will return a greeting statement that uses an input; your program should
return, "Hello, <name> how are you doing today?"
*/

function greet($name) {
    return "Hello, " . $name  .  " how are you doing today?";
}


/*
    ----TESTE----
*/

echo greet("Junior") . "<br>";
echo greet("Ryan") . "<br>";
echo greet("Cesar") . "<br>";
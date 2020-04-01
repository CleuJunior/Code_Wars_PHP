<?php

/*
A hero is on his way to the castle to complete his mission. However, he's been told that the castle is surrounded
with a couple of powerful dragons! each dragon takes 2 bullets to be defeated, our hero has no idea how many
bullets he should carry.. Assuming he's gonna grab a specific given number of bullets and move forward to fight
another specific given number of dragons, will he survive?

Return True if yes, False otherwise :)
*/

function hero(int $bullets, int $dragons){
    return ($bullets / 2 >= $dragons)? true : false;
}

/*
    ----TESTE----
*/

echo hero(10,5) . "<br>"; // true
echo hero(4,5) . "<br>"; // false
echo hero(100,40) . "<br>"; // true
echo hero(1500,751) . "<br>"; // false

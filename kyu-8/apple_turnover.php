<?php

/*
Your job is simple, if (x) squared is more than 1000, return 'It's hotter than the sun!!', else, return
'Help yourself to a honeycomb Yorkie for the glovebox.'.

X will be either a number or a string. Both are valid.
*/

function apple($x) {
 return (pow($x, 2) >= 1000)? "It's hotter than the sun!!" : "Help yourself to a honeycomb Yorkie for the glovebox.";
         
}

/*
    ----TESTE----
*/

echo apple('50') . "<br>"; 
echo apple(4) . "<br>";
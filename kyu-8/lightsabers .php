<?php 

/*
Inspired by the development team at Vooza, write the function  that
accepts the name of a programmer, and
returns the number of lightsabers owned by that person.
The only person who owns lightsabers is Zach, by the way. He owns 18, which is an awesome number of lightsabers.
Anyone else owns 0.

Note: your function should have a default parameter.

howManyLightsabersDoYouOwn('Zach') === 18
howManyLightsabersDoYouOwn('Adam') === 0
howManyLightsabersDoYouOwn()       === 0

*/

function howManyLightsabersDoYouOwn($name) {
   $num = 0;
   if($name == "Zach"){
    return $num = 18; 
    
   }else{
    return $num;
       
   }
}


$name = "";

echo howManyLightsabersDoYouOwn($name);
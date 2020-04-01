<?php

/*
Introduction
The first century spans from the year 1 up to and including the year 100, The second - from the year 101
up to and including the year 200, etc.

Task :
Given a year, return the century it is in.

Input , Output Examples ::
centuryFromYear(1705)  returns (18)
centuryFromYear(1900)  returns (19)
centuryFromYear(1601)  returns (17)
centuryFromYear(2000)  returns (20)

*/

function centuryFromYear($year){
  return ($year % 100 == 0)?  ($year / 100) : floor(($year / 100) +1);
}

/*
    ----TESTE----
*/

echo centuryFromYear(1705) . "<br>"; // 18
echo centuryFromYear(1900) . "<br>"; // 19
echo centuryFromYear(1601) . "<br>"; // 17
echo centuryFromYear(2000) . "<br>"; // 20
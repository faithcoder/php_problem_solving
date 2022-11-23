<?php 
/*
write a php program to compute the sum of the two given integer values.
if the two values are same, then returns triple their sum.
*/

function result($a, $b){
    return $a == $b ? ($a+$b)*3:$a+$b;
}

echo result(1, 2)."<br>";
echo result(3, 4)."<br>";
echo result(3, 3)."<br>";


<?php

/*
    write a php program to check two given integers 
    and return true if one of them is 30 or if their sum is 30
*/

function solution($a, $b){
    if($a == 30 || $b == 30 || $a + $b == 30){
        echo "true";
    }else{
        echo "false";
    }
}

echo solution(15, 15), "<br>";
echo solution(5, 15), "<br>";
echo solution(10, 20), "<br>";
echo solution(15, 10), "<br>";
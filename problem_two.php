<?php
// write a php program to get the absolute difference between n and 51.
// n is greater than 51, then return tripple the absolute difference 

function solution($n){
    $x = 51;
    if($n > $x){
        return ($n - $x)*3;
    }else {
        return $n-$x;
    }
}

echo solution(50);

?>

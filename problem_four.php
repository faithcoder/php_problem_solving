<?php

/*
write a php program to create a new string where 'if' is added to the front of a given string. 
If the string already begins with 'if', return the string unchanged
*/

function solution($s){
    if(strlen($s) >= 2 && substr($s,0,2) == 'if'){
        return $s; 
    }
    return 'if'.$s;
}

echo solution('if else'),"<br>";
echo solution(' else'),"<br>";
echo solution('if'),"<br>";
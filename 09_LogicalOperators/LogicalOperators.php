<?php

// $a and $b
// $a && $b   True if both variables are true
// $a or $b
// $a || $b  True if either $a or $b is true
// $a xor $b True if either $a or $b is true, but not both
// !$a True if $a is not true

$a = 10 ;
$b = 20 ;

if(($a==$b) xor ($a<=$b))
{
    echo 'Equal';
}
else
{
    echo 'Not Equal';
}
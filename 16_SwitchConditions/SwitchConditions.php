<?php

/*
Use switch command if you want the value of variable can be different
If variable value is not included in one of the cases, then the string inside default will be printed
NOTE: switch can be also used with strings, not only with numbers
*/

$number = 1;

switch ($number)
{
    case 1:
        echo "Number is 1";
    break;
    case 2:
        echo "Number is 2";
    break;
    case 3:
        echo "Number is 3";
    break;
    default:
    echo "Number not found";
break;
}

<?php

$Num1 = 10;

$Num2 = 20;

if ($Num1==$Num2) {
    echo 'Num1 i Num2 are equal <br>' ;   
}

elseif ($Num2<$Num1) {
    echo "Num2 is less than Num1" ;
}

else {
    echo "Num1 i Num2 are not equal <br>" ;
}

// "if" will print it's statement only if the statement is true
// If statement under "if" is false, then the statement under "else" is printed
// elseif will check other option if the statement included in "if" is false
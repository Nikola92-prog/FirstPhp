<?php

$Num1 = 10;

$Num2 = 20;

if($Num1==$Num2)
{
    echo 'Num1 i Num2 su jednaki <br>';   
}

elseif($Num2<$Num1)
{
    echo "Num2 je manji od Num1";
}

else
{
    echo "Num1 i Num2 nisu jednaki <br>";
}
// if ce ispisati string samo ukoliko je tvrdnja tocna, ukoliko nije, preskace se funkcija
// Ukoliko tvrdnja pod "if" nije tocna, else ce ispisati svoju tvrdnju
// elseif ce ukoliko tvrdnja pod if nije tocna, provjeriti svoju tvrdnju nakon if
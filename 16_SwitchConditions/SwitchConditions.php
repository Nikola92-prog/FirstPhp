<?php

/*
Ukoliko zelimo postaviti mogucnost da nam varijabla ima razlicite vrijednosti, koristimo naredbu switch 
REZULTAT, na ekranu ce se ispisati string unesen u echo koji odgovara slucaju, u ovom slucaju "Number is 1"
Ukoliko je unesen broj koji nije unutar caseova, echo koji ce se ispisati ispisuje se pomocu naredbe "default"
NAPOMENA - U ovom primjeru je varijabla koja ima numericku vrijednost. switch vrijedi i za string varijable takodjer
*/

$number = 5;

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

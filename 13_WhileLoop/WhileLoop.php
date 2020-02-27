<?php

//Ukoliko zelimo da se nesto vise puta isprinta, koristimo while loop
//Npr zelimo ponoviti "Opet i opet" 10 puta

$counter=1;

while($counter<=10)
{
    echo 'Opet i opet ' .$counter. '<br>' ;
    $counter++ ;
}

// Vrijednost $counter je jedan
// While ukoliko je vrijednost nula, nece biti petlje jer je 0 u php zapravo false statement
// Vrijednost countera unutar while iznosi <= od 10 jer u trenutku kad bude 11, loop prestaje
// .$counter. unutar koda ispisuje koliko puta se ponavlja kod, tj koju vrijednost je $counter poprimio u loopu
// $counter++ omogucuje da se vrijednost $counter u svakom iducem kodu poveca za svoju jedinicnu vrijednost, a to je 1
// kod while loop funkcije prvo se provjerava uvjet, pa se zatim izvršava kod
// do while loop funkcija prvo izvršava kod, pa zatim provjerava uvjet

/*
do
{
    echo 'Opet i opet ' .$counter. '<br>' ;
}
while($counter<=0);
*/
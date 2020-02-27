<?php

// Multidimensional array je zapravo koristenje arraya unutar arraya

//PRIMJER PROBLEMA; zelimo unijeti podatke za visine i tezine nekih osoba, kao u tablici
//      IME     VISINA      TEZINA
//      Marko   167         72
//      Ivan    182         80
//      Hrvoje  190         86

$students=array (array ('Name' => 'Marko', 
                        'Height' => 167, 
                        'Weight' => 72),
                 array ('Name' => 'Ivan',
                        'Height' => 182,
                        'Weight' => 80),
                 array ('Name' => 'Hrvoje',
                        'Height' => 190,
                        'Weight' => 86));

echo $students [0] ['Name'] . ' ' ; echo $students [0] ['Height'] . ' ' ; echo $students [0] ['Weight'] . '<br>' ;
echo $students [1] ['Name'] . ' ' ; echo $students [1] ['Height'] . ' ' ; echo $students [1] ['Weight'] . '<br>' ;
echo $students [2] ['Name'] . ' ' ; echo $students [2] ['Height'] . ' ' ; echo $students [2] ['Weight'] . '<br>' ;

// Prvi broj je red, drugi je stupac

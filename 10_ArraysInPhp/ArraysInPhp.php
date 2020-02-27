<?php

// Array je skup slicnih podataka, npr strings ili brojevi
// Omogucuje vise stringova ili brojeva u jednoj varijbli
// Prvi u nizu se numerira s 0 (nula)

$names = array ('Mark', 'John', 'Peter');

// Ukoliko zelimo dodati jos koju varijablu u array, to radimo ovako:

$names[3] = 'July';

//Ako zelimo isprintati sve stringove iz arraya, koristimo naredbu print_r

print_r ($names) ;

?>
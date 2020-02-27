<?php

//Ukoliko su navodnici "", varijabla moze biti ukljucena, 
//ukoliko su jednostruki navodnici (apostrofi) tada ce se printati tekst bez obzira na $

/*
$value = 25;

$name = "ProgrammingKnowledge" ;

echo "$value" ;

echo "<br> $name" ;

echo "<br> $value*4" ;
*/

/* Varijable imaju vise tipova, ovisno o podacima koje pohranjujemo u varijabli, npr

$Variable = 25 ; Integer - cijeli broj, moze biti pozitivan ili negativan
$Variable = 3.14; Float - decimalni broj, moze biti pozitivan ili negativan
$Variable = "String"; String - varijabla nacinjena od niza znakova; varijabla je tekst koji se reproducira
$Variable = true ; Boolean varijabla, moze sadrzavati true ili false
$Variable = array (34, 15, 93, 66...) ; Array - sadrzi vise podataka u varijabli, funkcionira kao tablica u excellu
*/

// Varijablama mozemo raditi i reference, odnosno mozemo se referirati na prethodnu varijablu, 
// znaci da je sadrzaj varijable druga varijabla (promjena u jednoj varijabli mijenja i drugu varijablu)

$foo = "Bob";
$bar = &$foo ;
$bar = "My name is $bar" ;

echo "$bar <br>";
echo $foo;
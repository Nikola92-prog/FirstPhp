<?php

//If used in quotation marks (""), variable can be included,
//If used in apostrophe (' '), variable will be considered as string, no matter if $ is used

/*
$value = 25;

$name = "ProgrammingKnowledge" ;

echo "$value <br>" ;

echo "$name <br>" ;

echo "$value * 4 <br>" ;
*/

/* There are different types of variables, depending which kind of data we are using

Examples of variable types

$Variable = 25 ; Integer - whole number, can be positive or negative
$Variable = 3.14; Float - decimal number, can be positive or negative
$Variable = "String"; String - represents data consisted of sign string, string usually means "word"
$Variable = true ; Boolean variable, can have true or false statement
$Variable = array (34, 15, 93, 66...) ; Array - consisted of more values in one variable
*/

// Variables can be referred to other variable, so variable can contain other variable

$foo = "Bob";
$bar = &$foo ;
$bar = "My name is $bar" ;

echo "$bar <br>";
echo $foo;
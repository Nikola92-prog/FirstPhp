<?php

// If we want to combine variable with string in echo command, we put string in apostrophes ('xyz') 
// and use dot (concatenation operator) (. .)

$name = "Ana" ;

echo "Hello Ana <br>" ;

echo 'Hello ' . $name . '<br>' ;

// Aim: to print "Hello Ana" twice, one under other, and use word Ana as string in first case, and represented with variable in other

// If we want our code to have internet link inside it, we can do it this way (html code)

echo '<a href="http://www.google.com">Google</a> <br>' ;

// If we want variable to represent our link, it can be done this way

$google = "Google Link" ;

echo '<a href="http://www.google.com">'.$google.'</a> <br>' ;

// ESCAPE OPERATION (\) - used if quotation marks are part of string

echo "\"Hello World\" <br>" ;

// Escape operator is useful in cases like this one --->  It's a beautiful day

echo 'It\'s a beautiful day <br>' ;

$Youtube = "Youtube Link";

echo '<a href ="http://www.youtube.com">'.$Youtube. '</a <br>' ;

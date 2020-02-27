<?php

// Ukoliko zelimo koristiti varijablu u naredbi echo nakon koje slijede jednostruki navodnixi ('xyz') koristimo tocku (.)

$name = "Ana" ;

echo "Hello Ana <br>" ;

echo 'Hello ' . $name . '<br>' ;

// Cilj: Ispisati "Hello Ana" jedno ispod drugoga

// Ukoliko zelimo unutar koda unijeti link koristimo se na sljedeci nacim (html kod)

echo '<a href="http://www.google.com">Google</a> <br>' ;

// ukoliko zelimo koristiti varijablu kao nositelj naziva za link, tada kod treba biti ovakav

$google = "Google Link" ;

echo '<a href="http://www.google.com">'.$google.'</a> <br>' ;

// ESCAPE OPERATION - ukoliko zelimo da se nesto ispise zajedno sa navodnicima, koristimo ESCAPE OPERATOR (\)

echo "\"Hello World\" <br>" ;

// U ovakvim slucajevima je korisno ;) ---> It's a beautiful day

echo 'It\'s a beautiful day <br>' ;

$Youtube = "Youtube Link";

echo '<a href ="http://www.youtube.com">'.$Youtube. '</a <br>' ;

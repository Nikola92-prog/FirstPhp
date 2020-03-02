<?php

//If we want a string to be printed more times, we use while loops
//Example: Print "Over and over again" ten times

$counter = 1 ;

while ($counter <= 10) {
    echo 'Over and over again ' .$counter. '<br>' ;
    $counter++ ;
}

// Value of $counter is 1
// If value of $counter is 0, while won't print anything, because 0 is considered as false statement
// Value of counter inside while is less than 10, because when it becomes more than 10, printing stops
// .$counter. inside code prints how many times statement has been printed (which value $counter has gained inside the loop)
// $counter++ allows to become bigger in next repetition of the loop
// $counter increases by it's value in every next row, and the value is 1
// while loop first checks if statement is correct, then it executes it
// do while loop is doing execution of code first, then it checks if it's correct

/*
do
{
    echo 'Over and over again ' .$counter. '<br>' ;
}
while($counter<=0);
*/
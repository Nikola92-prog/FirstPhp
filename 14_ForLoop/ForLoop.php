<?php

/* structure of for loop is like this (similar to while loop, but all required data is in one line):

    for (init; condition; increment) {
        statement(s);
    }

    */

    for ($counter = 1 ; $counter <= 10 ; $counter++) {
        echo 'Over and over ' .$counter. '<br>';
    }
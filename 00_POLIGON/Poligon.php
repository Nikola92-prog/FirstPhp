<?php

$students=array (array ('Name' => 'Marko', 
                        'Height' => 167, 
                        'Weight' => 72),
                 array ('Name' => 'Ivan',
                        'Height' => 182,
                        'Weight' => 80),
                 array ('Name' => 'Hrvoje',
                        'Height' => 190,
                        'Weight' => 86));

foreach($students as $student => $in_array)
{
    echo '<b>'.$student. '</b> <br>';
    foreach($in_array as $item)
    echo $item . '<br>';
}
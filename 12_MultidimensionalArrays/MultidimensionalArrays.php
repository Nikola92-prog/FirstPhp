<?php

// Multidimensional array is in fact using array inside of an array

//Example; you can use multidimensional array as a table in excell
//      NAME    HEIGHT      Weight
//      John    167         72
//      Ivan    182         80
//      Mark    190         86

$students=array (array ('Name' => 'John', 
                        'Height' => 167, 
                        'Weight' => 72),
                 array ('Name' => 'Ivan',
                        'Height' => 182,
                        'Weight' => 80),
                 array ('Name' => 'Mark',
                        'Height' => 190,
                        'Weight' => 86));

echo $students [0] ['Name'] . ' ' ; echo $students [0] ['Height'] . ' ' ; echo $students [0] ['Weight'] . '<br>' ;
echo $students [1] ['Name'] . ' ' ; echo $students [1] ['Height'] . ' ' ; echo $students [1] ['Weight'] . '<br>' ;
echo $students [2] ['Name'] . ' ' ; echo $students [2] ['Height'] . ' ' ; echo $students [2] ['Weight'] . '<br>' ;

// First square bracket is row, second is column

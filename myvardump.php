<?php

function my_vardump($values)
{

    // $values = array([1], true, 'ol', '10', 10, '9.3',10.93,[2]);

    // foreach ($values as $value) {
    if (is_string($values)) {
        echo ' string ';
        echo $values;
    } elseif (is_numeric($values)) {
        echo ' number';
        echo $values;
    } elseif (is_array($values)) {
        echo ' tableau ';
        print_r($values);
    }


    // else{
    //     echo ' false ';
    //     echo $values;
    // }

}

// }

my_vardump('');

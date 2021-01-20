<?php 

function my_vardump(){

$values = array([1], true, 'ol', '10', 10, '9.3',10.93,[2]);

    foreach ($values as $value) {
        if(is_string($value))
        echo ' string ';
        
        elseif(is_numeric($value))
        echo ' number';

        elseif(is_array($value))
        echo ' tableau ';

        else
        echo ' false ';
    }

}

my_vardump($values);

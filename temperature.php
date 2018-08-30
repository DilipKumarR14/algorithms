<?php
include "utility.php";

function temperature()
{
    $ref = new utility();
    echo "enter the choice 1-celsius/2-faherheit :\n ";
    $value = $ref->getint();
    switch ($value) {

        case 1:echo "enter the temperature in fahrenheit :\n ";
            $fah = $ref->getint();
            $result =   ($fah * 5 / 9) + 32;
            echo "temperature in celsius \n" . $result;
            break;
        case 2:echo "enter the temperature in celsius : \n";
            $cel = $ref->getint();
            $result =  ($cel - 32) - 5 / 9;                         ;
            echo "temperature in fahreheit \n" . $result;
            break;
        default:echo ("enter the correvct value \n");
            break;
    }
}
temperature();

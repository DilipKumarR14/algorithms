<?php
include "utility.php";
function calculation()
{
    $ref = new utility();
    echo "enter the non-negative number : ";
    $c = $ref->getint();
    $t = $c;
    $epsilon=1e-15;
    while(abs($t-$c/$t)>$epsilon*$t)
    {
        $t=(($c/$t)+$t)/2.0;#average
    }
    echo "result : " . $t . "\n";
}
calculation();
?>
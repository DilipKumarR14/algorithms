<?php
include "utility.php";
$ref=new utility();
echo "enter the day of the week ex=0-sunday,1-monday... : ";
$day=$ref->getint();
echo "enter the month of the week ex=0-january,1-february... : ";
$month=$ref->getint();
echo "enter the year in integer ... : ";
$year=$ref->getint();

$yo=round($year-(14-$month)/12);
$x=round($yo+$yo/4-$yo/100+$yo/400);
$mo=round($month+12*((14-$month)/12)-2);
$do=round(($day+$x+31*$mo/12)%7);

echo $yo."\t".$x."\t".$mo."\t".$do."\n";

?>
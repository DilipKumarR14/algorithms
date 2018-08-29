<?php
include "utility.php";
$ref=new Utility();
echo "Enter the string 1 : ";
$a=$ref->getstring();
echo "Enter the string 2 : ";
$b=$ref->getstring();
$ref->isAnagram($a,$b);
?>
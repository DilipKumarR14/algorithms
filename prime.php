<?php
include "utility.php";
$ref=new utility();
echo "enter the range : ";
$num=$ref->getint();
$a =$ref->rangeofprime($num);
?>
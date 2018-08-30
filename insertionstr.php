<?php
include "utility.php";
$ref=new utility();
$time_start = microtime(true);

$ref->insertionstr();

$time_end = microtime(true);
$time = $time_end - $time_start;
echo "elapsed time : ", $time;
?>
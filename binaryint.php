<?php
include "utility.php";
$ref = new utility();
$arr = array(1, 2, 3, 4, 5);
$value = 6;
$time_start = microtime(true);

$ref->binary($arr, $value);

$time_end = microtime(true);
$time = $time_end - $time_start;
echo "elapsed time : ", $time;
echo "\n";
?>

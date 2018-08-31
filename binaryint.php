<?php
include "utility.php";
$ref = new utility();

// $arr = array();
// $value = 6;

$time_start = microtime(true);

$ref->binary();

$time_end = microtime(true);
$time = $time_end - $time_start;
echo "elapsed time : ", $time;
echo "\n";
?>

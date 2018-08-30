<?php
function merge($arr, $l, $m, $r)
{
    $i;
    $j;
    $k;
    $n1 = $m - $l + 1;
    $n2 = $r - $m;
    $l = array($n1);
    $r = array($n2);
    for ($i = 0; $i < $n1; $i++) {
        $l[$i] = arr[$l + $i];
    }

    for ($j = 0; $j < $n2; $j++) {
        $r[$j] = arr[$m + 1 + $j];
    }

    $i = 0;
    $j = 0;
    $k = $l;
    while ($i < $n1 && $j < $n2) {
        if ($l[$i] <= $r[$j]) {
            $arr[$k] = $l[$i];
            $i++;
        } else {
            $arr[$k] = $r[$j];
            $j++;
        }
        $k++;
    }

    while ($i < $n1) {
        $arr[$k] = $l[$i];
        $i++;
        $k++;
    }
    while ($j < $n2) {
        $arr[$k] = $r[$j];
        $j++;
        $k++;
    }
}
function mergeSort($arr, $l, $r)
{
    if ($l < $r) {
        $m = $l + ($r - $l) / 2;
        mergeSort($arr, $l, $m);
        mergeSort($arr, $m + 1, $r);
        merge(arr, $l, $m, $r);
    }
}
function printArray($arr, $size)
{
    for ($i = 0; $i < $size; $i++) {
        echo $arr[$i];
    }

    echo ("\n");
}
// echo ("Enter the size of n : ");
$n = readline("enter the size : ");
// echo("enter the numbers : ");
for ($i = 0; $i < $n; $i++) {
    $arr[$i] = readline("enter the nos : ");
}
mergeSort($arr, 0, sizeof($arr) - 1);

<?php
#binary integer
include "utility.php";
function binaryinttime(){
echo "binary integer \n";
$ref = new utility();
$arr = array(1, 2, 3, 4, 5);
$value = 6;
$time_start = microtime(true);

$ref->binary($arr, $value);

$time_end = microtime(true);
$timebinaryint = $time_end - $time_start;
echo "elapsed time : ", $timebinaryint;
echo "\n";
echo "\n";
return $timebinaryint;
}
#binary string

function binarystrtime(){
echo "binary string \n";
$ref=new utility();
$time_start = microtime(true);

$ref->binarystring();

$time_end = microtime(true);
$timebinarystr = $time_end - $time_start;
echo "elapsed time : ",$timebinarystr;
echo "\n";
echo "\n";
return $timebinarystr;
}
#bubbbleint

// include "utility.php";
function bubbleinttime(){
echo "bubble integer \n";
$ref=new utility();
$time_start = microtime(true);

$ref->bubbleint();

$time_end = microtime(true);
$timebubbleint = $time_end - $time_start;
echo "elapsed time : ",$timebubbleint;
echo "\n";
echo "\n";
return $timebubbleint;
}
#bubble string

// include "utility.php";
function bubblestr(){
echo "bubble string \n";
$ref=new utility();
$time_start = microtime(true);

$ref->bubblestring();

$time_end = microtime(true);
$timebubblestr = $time_end - $time_start;
echo "elapsed time : ",$timebubblestr;
echo "\n";
echo "\n";
return $timebubblestr;
}
#insertion int

// include "utility.php";
function insertionint(){
echo "insertion integer \n";
$ref=new utility();
$time_start = microtime(true);
$ref->insertionint();
$time_end = microtime(true);
$timeinsertionint = $time_end - $time_start;
echo "elapsed time : ",$timeinsertionint;
echo "\n";
echo "\n";
return $timeinsertionint;
}
#insertion string
// include "utility.php";
function insertionstr(){
echo "insertion string  \n";
$ref=new utility();
$time_start = microtime(true);

$ref->insertionstr();

$time_end = microtime(true);
$timeinsertionstr = $time_end - $time_start;
echo "elapsed time : ", $timeinsertionstr;
echo "\n";
echo "\n";
return $timeinsertionstr;
}

$resultArr=array(binaryinttime(),binarystrtime(),bubbleinttime(),bubblestr(),insertionint(),insertionstr());
function timesorting($resultArr)
{
    for ($j = 0; $j < sizeof($resultArr); $j++) {
        for ($i = 0; $i < sizeof($resultArr) - 1; $i++) {

            if ($resultArr[$i] < $resultArr[$i + 1]) {
                $temp = $resultArr[$i + 1];
                $resultArr[$i + 1] = $resultArr[$i];
                $resultArr[$i] = $temp;
            }
        }
    }
    print_r($resultArr);
}
timesorting($resultArr);
?>
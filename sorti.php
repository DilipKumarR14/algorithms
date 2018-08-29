<?php
$str="army";
$str1="mare";
$q=tosplit($str);
$w=tosplit($str1);
$x=com($q,$w);
if($x==true)
{
    echo "anagram \n";
}
else{
    echo "not \n";
}

function com($q,$w){
if (sizeof($q) != sizeof($w)) {
    return false;
} else {
    for($i=0;$i<sizeof($q);$i++)
    {
             if($q[$i]!=$w[$i])
            {
                return false;
            }
    }
    return true;
}
}
function tosplit($a)
    {
        $string = $a;
        $resultArr = [];
        $strLength = strlen($string);
        for ($i = 0; $i < $strLength; $i++) {
            $resultArr[$i] = $string[$i];
        }
        print_r($resultArr);
        //comparing
        for ($j = 0; $j < sizeof($resultArr); $j++) {
            for ($i = 0; $i < sizeof($resultArr) - 1; $i++) {

                if ($resultArr[$i] > $resultArr[$i + 1]) {
                    $temp = $resultArr[$i + 1];
                    $resultArr[$i + 1] = $resultArr[$i];
                    $resultArr[$i] = $temp;
                }
            }
        }
        print_r($resultArr);
        return $resultArr;
    }
?>
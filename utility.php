<?php
class Utility
{
    //take integer input
    public function getstring()
    {
        fscanf(STDIN, '%s', $str);
        if (filter_var($str, FILTER_SANITIZE_STRING)) {
            return $str;
        } else {
            return $this->getstring();
        }
    }
    #Anagram Program

    public function isAnagram($str, $str1)
    {
        // $str="army";
        // $str1="mare";
        $ref = new Utility();
        $q = $ref->tosplit($str);
        $w = $ref->tosplit($str1);
        $x = $ref->com($q, $w);
        if ($x == true) {
            echo "anagram \n";
        } else {
            echo "not \n";
        }
    }
    #to spilt
    public function tosplit($a)
    {
        $string = $a;
        $resultArr = [];
        $strLength = strlen($string);
        for ($i = 0; $i < $strLength; $i++) {
            $resultArr[$i] = $string[$i];
        }
        //print_r($resultArr);
        // sort
        for ($j = 0; $j < sizeof($resultArr); $j++) {
            for ($i = 0; $i < sizeof($resultArr) - 1; $i++) {

                if ($resultArr[$i] > $resultArr[$i + 1]) {
                    $temp = $resultArr[$i + 1];
                    $resultArr[$i + 1] = $resultArr[$i];
                    $resultArr[$i] = $temp;
                }
            }
        }
        //print_r($resultArr);
        return $resultArr;
    }
    #comparing
    public function com($q, $w)
    {
        if (sizeof($q) != sizeof($w)) {
            return false;
        } else {
            for ($i = 0; $i < sizeof($q); $i++) {
                if ($q[$i] != $w[$i]) {
                    return false;
                }
            }
            return true;
        }
    }
    #prime number

    function rangeofprime($n)
{
    for ($i = 1; $i < $n; $i++) 
    {
        $flag= 1;
        for ($j = 2; $j <$i; $j++)
         {
            if ($i % $j == 0) 
            {
                $flag=0;
                break;
            }
        }
        if ($flag==1)
         {
            echo $i . "\t";
         }
    }
}
#maind ends
}

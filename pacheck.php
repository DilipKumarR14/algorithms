<?php
include "primeanagram.php";
$ref = new primeanagram();
$ref->pacheck();
$arr = array($ref);
check($arr);
    function check($arr)
    {
        for ($j = 0; $j < sizeof($arr); $j++)
        {
            if($arr[$j]==Palindrome($arr[$j]))
            {
                print_r($arr);
            }
            else{
                break;
            }
        }
    }
    function Palindrome($number){  
        $temp = $number;  
        $new = 0;  
        while (floor($temp)) {  
            $d = $temp % 10;  
            $new = $new * 10 + $d;  
            $temp = $temp/10;  
        }  
        if ($new == $number){  
            return 1;  
        }
        else{
            return 0;
        }
    }  
?>
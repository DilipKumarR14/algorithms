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
    #integer

    public function getint()
    {
        fscanf(STDIN, '%d', $str);
        if (filter_var($str, FILTER_VALIDATE_INT)) {
            return $str;
        } else {
            echo "enter the integer >0 ";
            return $this->getint();
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

    public function rangeofprime($n)
    {
        for ($i = 1; $i < $n; $i++) {
            $flag = 1;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $flag = 0;
                    break;
                }
            }
            if ($flag == 1) {
                echo $i . "\t";
            }
        }
    }

#primenanagram

    public function primeanagram()
    {
        function is_prime($n)
        {
            $i;
            for ($i = 2; $i < $n; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        function Palindrome($number)
        {
            $temp = $number;
            $new = 0;
            while (floor($temp)) {
                $d = $temp % 10;
                $new = $new * 10 + $d;
                $temp = $temp / 10;
            }
            if ($new == $number) {
                return true;
            } else {
                return false;
            }
        }
        for ($i = 2; $i < 1000; $i++) {
            if (is_prime($i) && Palindrome($i)) {
                echo $i . "\n";
            }
        }

        for ($i = 2; $i < 1000; $i++) {
            if (is_prime($i) && Palindrome($i)) {
                echo $i . "\n";
            }
        }
    }
#binary search
    public function binarySearch(array $arr, $x)
    {
        if (count($arr) === 0) {
            return false;
        }

        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($arr[$mid] == $x) {
                return true;
            }

            if ($x < $arr[$mid]) {

                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
        return false;
    }
    #binary integer
    public function binary($arr, $value)
    {

        if ($this->binarySearch($arr, $value) == true) {
            echo $value . " Exists \n";
        } else {
            echo $value . " Doesnt Exist\n";
        }
    }

#binary string

    public function binarystring()
    {
        function binarySearch(array $arr, $x)
        {
            if (count($arr) === 0) {
                return false;
            }

            $low = 0;
            $high = count($arr) - 1;

            while ($low <= $high) {
                $mid = floor(($low + $high) / 2);
                if ($arr[$mid] == $x) {
                    return true;
                }

                if ($x < $arr[$mid]) {

                    $high = $mid - 1;
                } else {
                    $low = $mid + 1;
                }
            }
            return false;
        }
        #binary integer
        function binary($arr, $value)
        {

            if (binarySearch($arr, $value) == true) {
                echo $value . " Exists \n";
            } else {
                echo $value . " Doesnt Exist\n";
            }
        }
        $arr = array("a", "b", "c", "d");
        $value = "a";
        binary($arr, $value);
    }

#insertion integer

    public function insertionint()
    {
        function insertionintSort(&$arr, $n)
        {
            for ($i = 1; $i < $n; $i++) {
                $key = $arr[$i];
                $j = $i - 1;
                while ($j >= 0 && $arr[$j] > $key) {
                    $arr[$j + 1] = $arr[$j];
                    $j = $j - 1;
                }

                $arr[$j + 1] = $key;
            }
        }
        function printintArray(&$arr, $n)
        {
            for ($i = 0; $i < $n; $i++) {
                echo $arr[$i] . " ";
            }

            echo "\n";
        }
        $arr = array(12, 11, 13, 5, 6);
        $n = sizeof($arr);
        insertionintSort($arr, $n);
        printintArray($arr, $n);
    }

#insertion sort for string
    public function insertionstr()
    {
        function insertionSort(&$arr, $n)
        {
            for ($i = 1; $i < $n; $i++) {
                $key = $arr[$i];
                $j = $i - 1;
                while ($j >= 0 && $arr[$j] > $key) {
                    $arr[$j + 1] = $arr[$j];
                    $j = $j - 1;
                }

                $arr[$j + 1] = $key;
            }
        }
        function printArray(&$arr, $n)
        {
            for ($i = 0; $i < $n; $i++) {
                echo $arr[$i] . " ";
            }

            echo "\n";
        }
        $arr = array("kjk", "dfd", "fdg", "hj", "sd");
        $n = sizeof($arr);
        insertionSort($arr, $n);
        printArray($arr, $n);
    }

#bubble integer

    public function bubbleint()
    {
        function bubbleintSort(&$arr)
        {
            $n = sizeof($arr);
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $t = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $t;
                    }
                }
            }
        }
        $arr = array(4, 22, 56, 64, 3, 23, 342, 32);
        $len = sizeof($arr);
        bubbleintSort($arr);

        echo "Sorted array : \n";

        for ($i = 0; $i < $len; $i++) {
            echo $arr[$i] . " ";
        }

        echo "\n";
    }

#bubble string

    public function bubblestring()
    {
        function bubbleSort(&$arr)
        {
            $n = sizeof($arr);
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $t = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $t;
                    }
                }
            }
        }
        $arr = array("bnm", "nlkj", "jhk", "zx", "qwq");
        $len = sizeof($arr);
        bubbleSort($arr);

        echo "bubble Sorted array : \n";

        for ($i = 0; $i < $len; $i++) {
            echo $arr[$i] . " ";
        }

        echo "\n";
    }
    #guess the number

    public function guessnumber()
    {
        function search($low, $high)
        {
            $ref = new utility();
            if (($low - $high) == 1) {
                return $low;
            }
            $mid = ($low + $high) / 2;
            echo "is it less 1-less/2-high/3-yes : ", (int) $mid . "\n";
            $num = $ref->getint();
            if ($num == 1) {
                return search($mid, $high);
            } else if ($num == 2) {
                return search($low, $mid);
            } elseif ($num == 3) {
                echo "is this your number : " . $mid . "\n";
            } else {
                echo "entered wrong number : ";
            }
        }

        function main()
        {
            $ref = new utility();
            echo ("enter guess the number in range of power 2 : ");
            $k = $ref->getint();
            echo ("enter the number between 0 to " . $k . "\n");

            $n = (int) pow(2, $k);
            $find = search(0, $n);
            // echo ("your number is : " . $find);
            // echo "\n";
        }
        main();
    }

#binary search word
    public function binarysearchword()
    {
        $s = file_get_contents("file.txt");
        $s = strtolower($s);
        $sarr = array();
        $arr = explode(" ", $s);
        // print_r($arr);
        //sorting
        for ($j = 0; $j < sizeof($arr); $j++) {
            for ($i = 0; $i < sizeof($arr) - 1; $i++) {

                if ($arr[$i] > $arr[$i + 1]) {
                    $temp = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }
        print_r($arr);
        echo ("enter the string to search : ");
        $search = $this->getstring();
        $this->binary($arr, $search);
    }

    #insertion sort strin 7

    public function insertionstr7()
    {
        function insertionSort(&$arr, $n)
        {
            for ($i = 1; $i < $n; $i++) {
                $key = $arr[$i];
                $j = $i - 1;
                while ($j >= 0 && $arr[$j] > $key) {
                    $arr[$j + 1] = $arr[$j];
                    $j = $j - 1;
                }
                $arr[$j + 1] = $key;
            }
        }
        function printArray(&$arr, $n)
        {
            echo ("sorted strings : \n");
            for ($i = 0; $i < $n; $i++) {
                echo $arr[$i] . " ";
            }
            echo "\n";
        }
        echo ("enter size of n words : ");
        $n = $this->getint();
        for ($i = 0; $i < $n; $i++) {
            echo ("enter the words : ");
            $arr[$i] = $this->getstring();
        }
        insertionSort($arr, $n);
        printArray($arr, $n);
        $arr = array();
    }

    #bubble sort integer 
    function bubble8int()
    {
        function bubbleintSort(&$arr)
        {
            $n = sizeof($arr);
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $t = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $t;
                    }
                }
            }
        }
        echo ("Enter the size of n : ");
        $n = $this->getint();
        echo("enter the numbers : ");
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] =$this->getint(); 
        }
        bubbleintSort($arr);

        echo "Sorted array : \n";

        for ($i = 0; $i < $n; $i++) {
            echo $arr[$i] . " ";
        }

        echo "\n";
    }
    #merge sort

    function mergesorting()
{
    function merge_sort($arr)
    {
        if (count($arr) == 1) {
            return $arr;
        }

        $mid = count($arr) / 2;
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);
        $left = merge_sort($left);
        $right = merge_sort($right);
        return merge($left, $right);
    }
    function merge($left, $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }
    $arr = array(23, 343, 12, 546, 324, 13, 1);
    print_r(merge_sort($arr)) . "\n";
}

#vending machine
function getintfloat()
    {
        fscanf(STDIN, '%f', $str);
        if (filter_var($str, FILTER_VALIDATE_INT)) {
            return $str;
        } else {
            return $this->vendingmachine();
        }
    }
function vendingmachine()
{
    $ref=new utility();
    $arr = array(1, 2, 5, 10, 50, 100, 500, 1000);
    echo ("enter the change to be given : ");
    $change =$ref->getintfloat();
    $t;
    $f;
    $h;
    $fif;
    $te;
    $fiv;
    $tw;
    $o;
    
    while ($change >= 1000) {
        $t = $change / 1000;
        $change %= 1000;
        echo "change for 1000 : " . $t;
        echo "\n";
        break;
    }
    while ($change >= 500) {
        $f = $change / 500;
        $change %= 500;
        echo "change for 500 : " . $f;
        echo "\n";
        break;
    }
    while ($change >= 100) {
        $h = $change / 100;
        $change %= 100;
        echo "change for 100 : " . $h;
        echo "\n";
        break;
    }
    while ($change >= 50) {
        $fif = $change / 50;
        $change %= 50;
        echo "change for 50 : " . $fif;
        echo "\n";
        break;
    }
    while ($change >= 10) {
        $te = $change / 10;
        $change %= 10;
        echo "change for 10 : " . $te;
        echo "\n";
        break;
    }
    while ($change >= 5) {
        $fiv = $change / 5;
        $change %= 5;
        echo "change for 5 : " . $fiv;
        echo "\n";
        break;
    }
    while ($change >= 2) {
        $tw = $change / 2;
        $change %= 2;
        echo "change for 2 : " . $tw;
        echo "\n";
        break;
    }
    while ($change >= 1) {
        $o = $change / 1;
        $change %= 1;
        echo "change for 1 : " . $o;
        echo "\n";
        break;
    }
}


#main ends
}

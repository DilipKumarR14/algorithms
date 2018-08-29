<?php
class primeanagram{
function pacheck(){
for ($k = 0; $k < 10; $k++) 
{
        $flag = 1;
        for ($j = 2; $j < $k; $j++)
         {
            if ($k % $j == 0) 
            {
                $flag = 0;
                break;
            }
        }
        if ($flag == 1) {
            $prime[$k] = $k . "\t";
    }
}
print_r($prime);
}
}
?>

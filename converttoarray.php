<?php
function converttoarray()
{
    $string = 'This';
    $word = '';
    $warray = array();

    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == ' ') {
            $warray[] = $word;
            $word = '';
        } else {
            $word .= $string[$i];
        }
    }

    if ($word != '') {
        $warray[] = $word;
    }
    print_r($warray);
}
?>
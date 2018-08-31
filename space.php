<?php

$file="file.txt";

$fopen = fopen($file, "r");

$fread = fread($fopen,filesize("$file"));

fclose($fopen);

$split = explode(",", $fread);

foreach ($split as $string)
{
echo "$string<br><br>";
}

?>
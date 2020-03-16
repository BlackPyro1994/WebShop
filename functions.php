<?php

function printLog($name)
{
    $file = 'data.txt';
//    file_put_contents($file, $name . PHP_EOL, FILE_APPEND | LOCK_EX);
//    file_put_contents($file, $name . PHP_EOL, FILE_APPEND);
//    $fp = fopen('data.txt', 'w');
//    fwrite($fp, $name);
//    fclose($fp);

//    $fp = fopen($file, 'a');//opens file in append mode
//    fwrite($fp, $name);
//    fwrite($fp, 'appending data');
//    fclose($fp);


    $content = stripslashes($name . "\n");

    $fp = fopen($file,"a+") or die ("Error opening file in write mode!");

    fputs($fp,$content);

    fclose($fp) or die ("Error closing file!");
}

?>

<?php

exec("C://Users/Alexander/echo.bat");

$myShoe = "new_test";

log($myShoe);

function printLog($name)
{
    $fp = fopen('data.txt', 'w');
    fwrite($fp, $name);
    fclose($fp);
}

include_once('templates/main/header.php');
include_once('templates/category/list_categories.php');
include_once('templates/product/list_products.php');
include_once('templates/main/footer.php');
include_once('test.php');
?>
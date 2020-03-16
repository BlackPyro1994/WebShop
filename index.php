<?php

exec("C://Users/Alexander/echo.bat");

require_once "functions.php";

foreach ($_SERVER as &$value) {
    printLog($value);
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element

$myShoe = "new_test";

log($myShoe);

header("Location: ./new_page.php");
exit();


?>
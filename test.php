<html>
<body>

<?php //echo $_SERVER['PHP_SELF']; ?>

<form method="post" action="./new_page.php">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
//        $fp = fopen('data.txt', 'w');
//        fwrite($fp, $name);
//        fclose($fp);

        printLog($name);
    }
}
?>

</body>
</html>
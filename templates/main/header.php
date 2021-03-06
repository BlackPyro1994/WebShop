<!DOCTYPE html>
<html>

<head>
    <title>Ultra Shop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php

/*
foreach ($_SERVER as &$value) {
    printLog($value);
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
*/

?>

<body>

<header>
    <div id="info">
        <img src="images/site/logo.svg">
        <h1><a href="index.php">Ultra Shop</a></h1>
        <a href="list_cart.php"><i class="fa fa-shopping-cart"></i>(0)</a>
    </div>
    <div id="user">
        <form action="action_login.php" method="post">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <div>
                <input type="submit" value="Login">
                <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</header>

<nav id="menu">
    <ul>
        <li><a href="index.php">Products</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contacts.php">Contacts</a></li>
    </ul>
</nav>

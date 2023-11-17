<?php 
include('includes/connection.php');
include('includes/header.php');
include('includes/navbar.php');
session_start();

unset($_SESSION['login']);
header("location: login.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <a href="./login.php">login</a>
</body>
</html>
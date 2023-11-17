<?php
include('includes/connection.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            color: #7a6031;
            justify-content: space-between;
            text-align: center;
        }
        h1{
            padding-top: 150px;
        }
    </style>



    <h1>
        Welcome to SPH
    </h1>


    <?php

    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login'] == 1) {
            echo '<a href="./home.php"></a>';
            echo 'Do you want to logout yourself';
            echo '<a href="./logout.php" class="btn btn-primary">Logout</a>';
        }
    } else {
        echo 'you need to login to see posts ';
        echo '<a href="./login.php" class="btn btn-primary">Login</a>';
    }
    ?>
    

</body>

</html>
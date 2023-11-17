<?php
include('includes/connection.php');
include('includes/header.php');
include('includes/navbar.php');
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $confirmpassword = $_POST["confirmpassword"];

    $query = "INSERT INTO `sph_users`(`name`, `username`, `email`, `password`) VALUES('$name', '$username', '$email', '$password');";

    $exe = mysqli_query($con, $query);
    if ($exe) {
        header('location:login.php');
    } else {
        echo mysqli_error($con);
    }
}

?>

<style>
    body {
        color: #7a6031;
        justify-content: space-between;
        text-align: center;
    }
    h2{
        padding-top: 150px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <h2>Registration</h2>
    <form action="" method="post" autocomplete="off">
        <div class="row flex-column justify-content-center">
            <div class="col-md-6 mx-auto mb-3">
                <label for="name" class="d-block text-start mb-2">Name : </label>
                <input type="text" class="form-control" name="name" id="name" required value="">
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <label for="username" class="d-block text-start mb-2">Username : </label>
                <input type="text" class="form-control" name="username" id="username" required value="">
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <label for="email" class="d-block text-start mb-2">Email : </label>
                <input type="email" class="form-control" name="email" id="email" required value="">
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <label for="password" class="d-block text-start mb-2">Password : </label>
                <input type="password" class="form-control" name="password" id="password" required value="">
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <label for="confirmpassword" class="d-block text-start mb-2">Confirm Password : </label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required value="">
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form><br>
    already have an account???
    <a href="./login.php" class="btn btn-primary">Login</a>
</body>

</html>
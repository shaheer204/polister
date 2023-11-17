<?php
include('includes/connection.php');
include('includes/header.php');
include('includes/navbar.php');

if (isset($_POST["submit"])) {

    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $exe = mysqli_query($con, "SELECT * FROM sph_users WHERE (username = '$usernameemail' OR email = '$usernameemail') and `password` = '$password' ");
    if ($exe) {
        $rows = mysqli_num_rows($exe);
        if ($rows > 0) {
            $_SESSION['login'] = 1;
            header('location: home.php');
        }
    } else {
        echo mysqli_error($con);
    }
}

?>
<style>
    body {
        color: #7a6031;
        justify-content: center;
        text-align: center;
        align-items: center;
       
    }

    button {
        background-color: aliceblue;
        color: black;
        height: 40px;
        width: 80px;
    }

    button:hover {
        background-color: #7a6031;
        color: white;
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
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>

    <form action="login.php" method="post" autocomplete="off">
        <div class="row flex-column justify-content-center">
            <div class="col-md-6 mx-auto mb-3">
                <label for="usernameemail" class="d-block text-start mb-2">Username or Email : </label>
                <input type="text" class="form-control" name="usernameemail" autocomplete="usernameemail" id="usernameemail" required value="">
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <label for="password" class="d-block text-start mb-2">Password : </label>
                <input type="password" class="form-control" name="password" autocomplete="current-password" id="password" required value="">
            </div>
            <div class="col-md-12 text-center">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

        
    </form> <br>
Don't have an account?
    <a href="./registration.php" class="btn btn-primary">Registration</a>
</body>

</html>
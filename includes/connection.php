<?php
 $con = mysqli_connect('localhost', 'root', '', 'products');
session_start();
include('functions.php');
$_SESSION['company_name'] = 'SHAHEER POLYESTER HOUSE';
 ?>

<?php
session_start();
$id = $_SESSION['logged'];
include "includes/dbconnection.php";
$sql = "UPDATE users SET user_activity = 'Logged Out' WHERE user_id = '$id' ";
$update = mysqli_query($conn,$sql);
session_unset();
session_destroy();
header('Location:../login.php');
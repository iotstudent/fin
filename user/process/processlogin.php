<?php

session_start();
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if(empty($_POST["email"])) {
      $_SESSION['error']= " email is required";
      header("Location:../../login.php");
      die();
    } else {
      $email =  test_input($_POST["email"]);
    }
    
    if(empty($_POST["password"])) {
      $_SESSION['error']="Password is required";
      header("Location:../../login.php");
      die();
    } else {
      $password = test_input($_POST["password"]);
    }    
  }

  // check if user exist
$sql= " SELECT * FROM users WHERE email = '$email' ";
    if($result = mysqli_query($conn,$sql)){
        if (mysqli_num_rows($result)<1){
            $_SESSION['error'] = " Wrong login details";
            header("Location:../../login.php");
            die();
          }       
      }


if(mysqli_num_rows($result)==1){
    //extract data from db row and store in an array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $db_password = $row["password"];
        $_SESSION['logged'] = $row["user_id"];
        $_SESSION['status'] = $row["status"];
        $_SESSION['code'] = $row["referal_code"];
        $_SESSION['fname'] = $row["first_name"];
        $_SESSION['lname'] = $row["last_name"];
        $_SESSION['pic'] = $row["user_picture"];
        $id = $_SESSION['logged'];
    // check for password matching
    if(password_verify($password, $db_password)){
      $sql = "UPDATE users SET user_activity = 'Logged In' WHERE user_id = '$id' ";
      $update = mysqli_query($conn,$sql);
        header("Location:../index.php");
        die();
      }else{
          $_SESSION['error'] = " Wrong login details";
          header("Location:../../login.php");
          die();
      }
    
}else {
    
    $_SESSION['error'] = " Wrong login details";
    header("Location:../login.php");
}
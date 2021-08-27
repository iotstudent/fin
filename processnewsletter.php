<?php session_start();
 include "includes/formfunctions.php";
 include "includes/dbconnection.php";

 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//check for errors in the email from form on forgot.php
if ($_SERVER["REQUEST_METHOD"] == "GET"){

    $url =  $_GET["pagename"];
    
      
      if(empty($_GET["email"])) {
        $_SESSION['error'] = " Email is required";
        header("Location:$url");
        die();
      } else {
        $email =  test_input($_GET["email"]);
      }
    
    // insert into db
$insert = " INSERT INTO newsletter(email)VALUES ('$email') ";
$result = mysqli_query($conn,$insert);
if($result){
    header("Location:$url");
    die();
}else{
    header("Location:$url");
    die();
}
   
  }



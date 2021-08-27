<?php session_start();
include "includes/formfunctions.php";
include "includes/sm.php";
include "includes/dbconnection.php";

//collect data from form on register.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["name"])) {
        $_SESSION['error'] = "Name is required";
        header("Location:appointment.php");
        die();
      } else {
        $name = test_input($_POST["name"]);
      }

if(empty($_POST["email"])) {
  $_SESSION['error'] = "Email is required";
  header("Location:appointment.php");
  die();
} else {
  $email = test_input($_POST["email"]);
}

  
if(empty($_POST["phone"])) {
  $_SESSION['error'] = "Phone is required";
  header("Location:appointment.php");
  die();
} else {
  $phone = test_input($_POST["phone"]);
}

if(empty($_POST["state"])) {
  $_SESSION['error'] = "state is required";
  header("Location:appointment.php");
  die();
} else {
  $state = test_input($_POST["state"]);
} 

$sector = test_input($_POST["sector"]);  

}


// insert into db
$insert = " INSERT INTO affiliate(email,name,state,sector,phone)VALUES ('$email','$name','$state','$sector','$phone') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Your application has been received pls check your mail ";
sendAffEmail($email,$name,$sector);
header("Location:appointment.php");
}else{
echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
}
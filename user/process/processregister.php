<?php session_start();?>
<?php include "../includes/formfunctions.php";?>
<?php include "../includes/sm.php";?>
<?php include "../includes/dbconnection.php";?>
<?php

//collect data from form on register.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["fname"])) {
  $_SESSION['error'] = "First Name is required";
  header("Location:../../signup.php");
  die();
} else {
  $fname = test_input($_POST["fname"]);
}
if(empty($_POST["lname"])) {
    $_SESSION['error'] = "Last Name is required";
    header("Location:../../signup.php");
    die();
  } else {
    $lname = test_input($_POST["lname"]);
  }
if(empty($_POST["mname"])) {
    $_SESSION['error'] = "Middle Name is required";
    header("Location:../../signup.php");
    die();
  } else {
    $mname = test_input($_POST["mname"]);
  }

if(empty($_POST["email"])) {
  $_SESSION['error'] = "Email is required";
  header("Location:../../signup.php");
  die();
} else {
  $email = test_input($_POST["email"]);
}


    $refe = test_input($_POST["refe"]);

  
if(empty($_POST["password"])) {
  $_SESSION['error'] = "Password is required";
  header("Location:../../signup.php");
  die();
} else {
  $password = test_input($_POST["password"]);
}

if(empty($_POST["cpassword"])) {
  $_SESSION['error'] = "Password needs to be confirmed";
  header("Location:../../signup.php");
  die();
} else {
  $confirm_password = test_input($_POST["cpassword"]);
} 

}
//generate token for user verifcation
$token = bin2hex(random_bytes(50));

//compare password and confirm password
if($_POST["cpassword"] == $_POST["password"]){
$password = $confirm_password;
} else {
$_SESSION['error'] = " Password doesnt match ";
header("Location:../../signup.php");
die();
} 

date_default_timezone_set('Africa/Lagos');
$date = date('Y/m/d');

//password encryption
$password = password_hash($password,PASSWORD_DEFAULT);

// check if user exist
$sql= " SELECT * FROM users WHERE email = '$email' ";
if($result = mysqli_query($conn,$sql)){
if (mysqli_num_rows($result)>0){
    $_SESSION['error'] = " This Email has been used before ";
    header("Location:../../signup.php");
    die();
  }       
}
$code= uniqid(rand(),true);
// insert into db
$insert = " INSERT INTO users(email,first_name,last_name,middle_name,password,token,reg_date,referal_code,referee_code)VALUES ('$email','$fname','$lname','$mname','$password','$token','$date','$code','$refe') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Registration Successful pls check your mail for verification link ";

sendRegEmail($email,$fname,$lname);
sendVerificationEmail($email,$token);
header("Location:../../login.php");
}else{
echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
}
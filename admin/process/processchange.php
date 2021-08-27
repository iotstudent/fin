<?php 
session_start();
$id = $_SESSION['elcharilogged'];
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if(empty($_POST["cpassword"])) {
      $_SESSION['error'] = " Password is required ";
      header("Location:../change.php");
      die();
    } else {
      $current_password = test_input($_POST["cpassword"]);
    }
  
    if(empty($_POST["npassword"])) {
      $_SESSION['error'] = " Type in a new password ";
      header("Location:../change.php");
      die();
    } else {
      $new_password = test_input($_POST["npassword"]);
    }
  
    if(empty($_POST["rnpassword"])) {
      $_SESSION['error'] = " New Password needs to be rentered";
      header("Location:../change.php");
      die();
    } else {
      $rn_password = test_input($_POST["rnpassword"]);
    }   
  }
  
  //compare new password and reentered passowrd for matching
  if($_POST["npassword"] == $_POST["rnpassword"]){
      $new_password = $rn_password;
    } else {
      $_SESSION['error'] = " New Password doesnt match ";
      header("Location:../change.php");
      die();
  }
  
  
//hash new password
  $new_password = password_hash($new_password,PASSWORD_DEFAULT);

  //select 
  $sql= " SELECT password FROM admin WHERE id = '$id' ";
      if($result = mysqli_query($conn,$sql)){       
              if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $db_password = $row["password"];
                     // check for password matching between current password and passowrd from db
                    if(password_verify($current_password, $db_password)){
                        $sql = "UPDATE admin SET password = '$new_password' WHERE id = '$id' ";
                        $update = mysqli_query($conn,$sql);
                        $_SESSION['message'] = " Password successfully changed";
                        header("Location:../logout.php");
                        die();
                    }else{
                        $_SESSION['error'] = " Password does not match";
                        header("Location:../change.php");
                        die();
                    }
        
              } 
      }
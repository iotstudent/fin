<?php session_start();
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
 
//check if token exist and decode
if ($_POST['token']) {
    $token = $_POST['token'];    
    // decode
    $email_decoded = base64_decode(strtr($token, '-_', '+/'));
}


// collect token passed from reset.php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
  

        if(empty($_POST["token"])) {
            $_SESSION['error'] = " Token empty";
            header("Location:../../login.php");
            die();
          } else {
            $token = $token;
          }
      
        if(empty($_POST["password"])) {
          $_SESSION['error'] = " Type in a new password";
          header("Location:../../reset.php?token=$token");
          die();
        } else {
          $password = test_input($_POST["password"]);
        }
      
       
        if(empty($_POST["cpassword"])) {
          $_SESSION['error'] = "  Password needs to be re-entered";
          header("Location:../../reset.php?token=$token");
          die();
        } else {
          $cpassword = test_input($_POST["cpassword"]);
        }   
    }


    // compare password and confirm password to ensure they are same  
    if($_POST["password"] == $_POST["cpassword"]){
        $password = $cpassword;
    } else {
        $_SESSION['error'] = " Password doesnt match ";
        header("Location:../../reset.php?token=$token");
        die();
    }
      
      
    //password encryption and sql query to update password
    $new_password = password_hash($password,PASSWORD_DEFAULT);
    $sql = " UPDATE users SET password = '$new_password' WHERE email = '$email_decoded' ";
    if( $update = mysqli_query($conn,$sql)){
        $_SESSION['message'] = " Password successfully changed";
        header("Location:../../login.php");
        die();
    }else{
        $_SESSION['error'] = " Password could not be changed try again";
        header("Location:../../login.php");
        die(); 
    }
   
   
                        


?>

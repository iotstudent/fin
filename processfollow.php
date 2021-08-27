<?php session_start();
 include "includes/formfunctions.php";
 include "includes/sm.php";

//check for errors in the email from form on forgot.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $url =  $_POST["pagename"];
    $senderphone = $_POST["senderphone"];
  
    if(empty($_POST["sendername"])) {
        $_SESSION['error'] = " Name is required";
        header("Location:$url");
        die();
      } 
      else {
        $sendername =  test_input($_POST["sendername"]);
      }
      
      if(empty($_POST["senderemail"])) {
        $_SESSION['error'] = " Email is required";
        header("Location:$url");
        die();
      } else {
        $senderemail =  test_input($_POST["senderemail"]);
      }
    
     
      if(empty($_POST["sendermessage"])) {
        $_SESSION['error'] = " Message is required";
        header("Location:$url");
        die();
      } else {
        $sendermessage =  test_input($_POST["sendermessage"]);
      }
      sendRecEmail($senderemail,$sendername,$senderphone,$sendermessage,$url);
   
  }

 //send mail



<?php
session_start();
$id = $_SESSION['logged'];
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";

//kyc doc
    if(isset($_POST['kyc'])){
       
        if(empty($_FILES["attachment"])) {
            $_SESSION['error']=" Kyc document is required";
            header("Location:../kyc.php");
            die();
          } else {
              
            $info = pathinfo($_FILES['attachment']['name']);
            $ext = $info['extension'];
            $fname = $info['filename'];
            $filepath = $id.".".$ext; 
            $target = "../kyc/".$filepath;
            $finalpath="kyc/".$filepath;

            if ($_FILES['attachment']['error'] == 4) {
                $_SESSION['error']=" No Kyc document uploaded";
                header("Location:../kyc.php");
                die();
              } 

            if ($_FILES['attachment']['size'] == 0) {
                $_SESSION['error']=" Kyc document is too large";
                header("Location:../kyc.php");
                die();
              } 
            move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);
            print_r($_FILES);
           

            $sql= " UPDATE users SET kyc='$finalpath' WHERE user_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            if($update){
                $_SESSION['message']= " KYC document successfully updated ";
                header('Location:../kyc.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        
           
          }
      

            
    }
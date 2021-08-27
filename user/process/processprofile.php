<?php
session_start();
$id = $_SESSION['logged'];
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";


//edit  staff
    if(isset($_POST['edit'])){
       
        $fname =  test_input($_POST["fname"]);
        $mname =  test_input($_POST["mname"]);
        $lname =  test_input($_POST["lname"]);
        $dob =  test_input($_POST["dob"]);
        $email =  test_input($_POST["email"]);
        $phone =  test_input($_POST["phone"]);
        $telegram =  test_input($_POST["telegram"]);
        $dob =  test_input($_POST["dob"]);
        $address =  test_input($_POST["address"]);
        $bank =  test_input($_POST["bank"]);
        $acc =  test_input($_POST["acc"]);
        $acc_num =  test_input($_POST["accnum"]);
      

            $sql= "UPDATE users SET first_name='$fname',last_name='$lname',middle_name='$mname',phone_number='$phone',telegram='$telegram',email='$email',dob='$dob',address='$address',account_number='$acc_num',account_name='$acc',bank_name='$bank' WHERE user_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            
            if($update){
                $_SESSION['message']= " Profile successfully edited ";
                header('Location:../profile.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        
    }


    //profile  pic
    if(isset($_POST['pic'])){
       
        if(empty($_FILES["attachment"])) {
            $_SESSION['error']=" image  is required";
            header("Location:../profile.php");
            die();
          } else {
            $info = pathinfo($_FILES['attachment']['name']);
            $ext = $info['extension'];
            $fname = $info['filename'];
            $filepath = $uname.".".$ext; 
            $target = "../"."img/profilepic/".$filepath;
            $finalpath="img/profilepic/".$filepath;

            if ($_FILES['attachment']['error'] == 4) {
                $_SESSION['error']=" No Picture uploaded";
                header("Location:../profile.php");
                die();
              } 

            if ($_FILES['attachment']['size'] == 0) {
                $_SESSION['error']=" Picture size is too  large";
                header("Location:../profile.php");
                die();
              } 
            move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);
           
          }
      

            $sql= "UPDATE users SET user_picture='$finalpath' WHERE user_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            
            if($update){
                $_SESSION['message']= " Profile picture successfully updated ";
                header('Location:../profile.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        
    }
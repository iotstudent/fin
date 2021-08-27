<?php
session_start();
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
$uid = $_SESSION['logged'];
$uname = $_SESSION['name'];

//edit  staff
    if(isset($_POST['edit'])){
       
        $name =  test_input($_POST["name"]);
        $dept =  test_input($_POST["dept"]);
        $email =  test_input($_POST["email"]);
        $phone =  test_input($_POST["phone"]);
        $dob =  test_input($_POST["dob"]);
        $address =  test_input($_POST["address"]);
      

            $sql= "UPDATE users SET user_name='$name',user_phone='$phone',user_email='$email',user_dob='$dob',user_address='$address' WHERE user_id = '$uid' ";
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
            $target = "../"."files/assets/images/profilepic/".$filepath;
            $finalpath="files/assets/images/profilepic/".$filepath;
            move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);
           
          }
      

            $sql= "UPDATE users SET user_picture='$finalpath' WHERE user_id = '$uid' ";
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
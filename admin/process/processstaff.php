<?php
session_start();
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";

//create member from member page
    if(isset($_POST['add'])){

        $name =  test_input($_POST["name"]);
        $dept =  test_input($_POST["dept"]);
        $email =  test_input($_POST["email"]);
        $phone =  test_input($_POST["phone"]);
        $dob =  test_input($_POST["dob"]);
        $perm =  test_input($_POST["perm"]);
        $address =  test_input($_POST["address"]);
        $pics="files/assets/images/profilepic/avatarr.svg";
        $password = test_input($_POST["password"]);
        $pass=$password;
        

        //check db if email already exist
        $sql= " SELECT * FROM users WHERE user_email = '$email' " ;
        if($result = mysqli_query($conn,$sql)){
            if (mysqli_num_rows($result)>0){
                $_SESSION['error'] = " This Email has been used before ";
                header("Location:../addstaff.php");
                die();
            }       
        }

        // count number of staff
        $sql= (" SELECT COUNT(user_id) AS nousers FROM users  ;");
        if($result = mysqli_query($conn,$sql)){ 
                if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $user_number = $row['nousers'];
                        $user_number=$user_number+1;
                        $user_number= "#RO".$user_number;
                }
            }else { 
                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
            }
        
        //password encryption
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql= "INSERT INTO users(user_name,user_email,user_password,user_department,user_dob,user_address,user_phone,user_number,user_permission,user_picture)VALUES('$name','$email','$password','$dept','$dob','$address','$phone ','$user_number','$perm','$pics')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
    
        $_SESSION['message']=" Staff created ";
        mkdir("../".$name);
        header('Location:../viewstaff.php');
        die();
        }else{
        echo  mysqli_error($conn);
        die();
        }

    }   


    //delete item from stock
    if(isset($_POST['delete'])){
        if(isset($_POST['staffid']) && !empty($_POST['staffid'])){
            
            $staffid = $_POST['staffid'];
            
            $sql= "UPDATE users SET deleted=1 WHERE user_id = '$staffid'";
            $delete = mysqli_query($conn,$sql);
            if($delete){
                $_SESSION['message']= " Staff successfully deleted ";
                header('Location:../viewstaff.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }


    //edit  staff
    if(isset($_POST['edit'])){
        if(isset($_POST['staffid']) && !empty($_POST['staffid'])){
            
        $id = $_POST['staffid'];
        $name =  test_input($_POST["name"]);
        $dept =  test_input($_POST["dept"]);
        $email =  test_input($_POST["email"]);
        $phone =  test_input($_POST["phone"]);
        $dob =  test_input($_POST["dob"]);
        $address =  test_input($_POST["address"]);
        $perm =  test_input($_POST["perm"]);
      

            $sql= "UPDATE users SET user_name='$name',user_phone='$phone',user_email='$email',user_dob='$dob',user_address='$address',user_permission='$perm',user_department='$dept' WHERE user_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            
            if($update){
                $_SESSION['message']= " Staff  successfully edited ";
                header('Location:../viewstaff.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }
<?php
session_start();
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";

//create member from member page
    if(isset($_POST['create'])){

        $name =  test_input($_POST["name"]);
        $capital =  test_input($_POST["capital"]);
        $roi =  test_input($_POST["roi"]);
        $roi_capital =  test_input($_POST["roi_capital"]);
        $duration =  test_input($_POST["duration"]);
        $rb =  test_input($_POST["rb"]);
        $ro =  test_input($_POST["ro"]);
       
        $sql= "INSERT INTO package(name,capital,roi,roi_capital,duration,referal_bonus,roll_over)VALUES('$name','$capital','$roi','$roi_capital','$duration','$rb','$ro')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        $_SESSION['message']="Package Created Successfully";
        header('Location:../cpackage.php');
        die();
        }else{
        echo  mysqli_error($conn);
        die();
        }

    }   


    //delete item from stock
    if(isset($_POST['delete'])){
        if(isset($_POST['packid']) && !empty($_POST['packid'])){
            
            $packid = $_POST['packid'];
            
            $sql= "DELETE FROM package WHERE package_id = '$packid'";
            $delete = mysqli_query($conn,$sql);
            if($delete){
                $_SESSION['message']= " Package successfully deleted ";
                header('Location:../viewpackage.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }


    //edit  pacakage
    if(isset($_POST['edit'])){
        if(isset($_POST['packid']) && !empty($_POST['packid'])){
            
        $id = $_POST['packid'];
        $name =  test_input($_POST["name"]);
        $capital =  test_input($_POST["capital"]);
        $roi =  test_input($_POST["roi"]);
        $roi_capital =  test_input($_POST["roi_capital"]);
        $duration =  test_input($_POST["duration"]);
        $rb =  test_input($_POST["rb"]);
        $ro =  test_input($_POST["ro"]);
      

            $sql= "UPDATE package SET name='$name',capital='$capital',duration='$duration',roi='$roi',roi_capital='$roi_capital',referal_bonus='$rb',roll_over='$ro' WHERE package_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            
            if($update){
                $_SESSION['message']= " Package Successfully Edited ";
                header('Location:../viewpackage.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }
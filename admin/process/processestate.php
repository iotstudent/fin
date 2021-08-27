<?php session_start();
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";


    //add to customers
    if(isset($_POST['add'])){

            $name =  test_input($_POST["name"]);
           
           
            $sql= "INSERT INTO estate (estate_name)VALUES('$name')";
            $insert = mysqli_query($conn,$sql);

            if($insert){
            
                $_SESSION['message'] = " Estate was added ";
                header('Location:../estate.php');
                die();   
    
            }else {
                echo  mysqli_error($conn);
                $_SESSION['error'] = " Something went wrong  ";
                header('Location:../addestate.php');
                die();  
            }
    }   


   


    
    //delete from estates
    if(isset($_POST['delete'])){
        if(isset($_POST['estateid']) && !empty($_POST['estateid'])){
            
            $estateid = $_POST['estateid'];
            
            $sql= "DELETE FROM estate WHERE estate_id = '$estateid'";
            $delete = mysqli_query($conn,$sql);
            if($delete){
                $_SESSION['message']= " Estate successfully deleted ";
                header('Location:../estate.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }


    

   
       
?>
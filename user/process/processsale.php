<?php 
session_start();
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
$rmm=$_SESSION['name'];

    //add to sale
    if(isset($_POST['add'])){

            $name =  test_input($_POST["name"]);
            $estate =  test_input($_POST["estate"]);
            $cost =  test_input($_POST["cost"]);
            $amount =  test_input($_POST["amount"]);
            $date =  test_input($_POST["date"]);
           
            $sql= "INSERT INTO sale (customer_name,user_name,sale_date,cost_of_land,sale_amount,estate)VALUES('$name','$rmm','$date','$cost','$amount','$estate')";
            $insert = mysqli_query($conn,$sql);

            if($insert){
            
                $_SESSION['message'] = " Sale was added ";
                header('Location:../psale.php');
                die();   
    
            }else {
                echo  mysqli_error($conn);
                die();
            }
}   


   


    
    //delete lead from leads
    if(isset($_POST['delete'])){
        if(isset($_POST['saleid']) && !empty($_POST['saleid'])){
            
            $saleid = $_POST['saleid'];
            
            $sql= "DELETE FROM sale WHERE sale_id = '$saleid'";
            $delete = mysqli_query($conn,$sql);
            if($delete){
                $_SESSION['message']= " Sale successfully deleted ";
                header('Location:../psale.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }


    // edit leads
    if(isset($_POST['edit'])){
        if(isset($_POST['saleid']) && !empty($_POST['saleid'])){
            
            $id = $_POST['saleid'];
            $name =  test_input($_POST["name"]);
            $estate =  test_input($_POST["estate"]);
            $cost =  test_input($_POST["cost"]);
            $amount =  test_input($_POST["amount"]);
            $date =  test_input($_POST["date"]);
            
            $sql= "UPDATE sale SET customer_name='$name',sale_amount='$amount',cost_of_land='$cost',estate='$estate',sale_date='$date' WHERE sale_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            
            if($update){
                $_SESSION['message']= " Sale successfully edited ";
                header('Location:../psale.php');
                die();
            }else{
                echo  mysqli_error($conn);
                die();
            }
        }
    }
//existing sale
    if(isset($_POST['insale'])){
        if(isset($_POST['customerid']) && !empty($_POST['customerid'])){
            
            $id = $_POST['customerid'];
            $name =  test_input($_POST["name"]);
            $estate =  test_input($_POST["estate"]);
            $amount =  test_input($_POST["amount"]);
            $date =  test_input($_POST["date"]);


            $sql= " SELECT * FROM customer WHERE customer_id ='$id' ";
            $read= mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($read, MYSQLI_ASSOC);
                $amountx = $row['amount_paid'];
                $balancex = $row['balance'];
                $cost = $row['cost'];
                $new_amount = $amount + $amountx;
                $new_balance = $cost - $new_amount;
    
            $sql= "UPDATE customer SET amount_paid='$new_amount',balance='$new_balance' WHERE customer_id = '$id' ";
            $update = mysqli_query($conn,$sql);
            if($update){

                $sql= "INSERT INTO sale (customer_name,user_name,sale_date,cost_of_land,sale_amount,estate)VALUES('$name','$rmm','$date','$cost','$amount','$estate')";
                $insert = mysqli_query($conn,$sql);
                
                    if($insert){
                        $_SESSION['message']= " Sale successfully added ";
                        header('Location:../psale.php');
                        die();
                    }else{
                        echo  mysqli_error($conn);
                        die();
                    }

            }
            
        }
    }

  
?>
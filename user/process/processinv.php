<?php
session_start();
$id = $_SESSION['logged'];
if(!isset($_SESSION['logged'])){
	header('Location:../../login.php');
    die();
  }
if (($_SESSION['status'] != 'verified')) {
    $_SESSION['error'] = "Check your mail for verification link";
    header("Location:../../login.php");
    die();
}
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
include "../includes/count.php";
include "../includes/sm.php";

date_default_timezone_set('Africa/Lagos');
$tdate = date('Y/m/d');


if(isset($_POST['invest'])){
        if(isset($_POST['packid']) && !empty($_POST['packid'])){
            $pid = $_POST['packid'];
            
            // check for number of investment
            $number_of_investment = countONInv();
            if($number_of_investment >= 5){
                    $_SESSION['error']= "You are currently on more than 5 investments";
                    header('Location:../viewpackage.php');
                    die();
            }
            
            
            $sql= " SELECT * FROM package WHERE package_id ='$pid'";
            if($result = mysqli_query($conn,$sql)){ 
                
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $name = $row['name'];
                        $roi = $row['roi'];
                        $capital = $row['capital'];
                        $ro = $row['roll_over'];
                        $rb = $row['referal_bonus'];
                        $duration = $row['duration'];
                        $duration_in_days = 30 * $duration;
                }

                // check for sufficiency of funds
                $sql= "SELECT wallet,email,first_name,last_name FROM users WHERE user_id = '$id' ";
                $fetch = mysqli_query($conn,$sql);
                if($fetch){
                    $row = mysqli_fetch_array($fetch, MYSQLI_ASSOC);
                    $wallet_amt= $row['wallet'];
                    $fname= $row['first_name'];
                    $lname= $row['last_name'];
                    $fullname = $fname.$lname;
                    $email= $row['email'];
                   
                  
                    if($wallet_amt < $capital){
                        $_SESSION['error']= "Insufficient funds please top up your wallet";
                        header('Location:../viewpackage.php');
                        die();
                    }else {
                        $new_wallet = $wallet_amt - $capital;
                        $sql= "UPDATE users SET wallet='$new_wallet' WHERE user_id = '$id' ";
                        $update = mysqli_query($conn,$sql);
                        sendInvEmail($email,$name,$fullname);

                        if($number_of_investment < 1){

                            $sql= "SELECT referee_code FROM users WHERE user_id = '$id' ";
                            $select = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($select, MYSQLI_ASSOC);
                            $referee_code= $row['referee_code'];
        
                            $sql= "SELECT referal_earning,wallet AS referee_wallet FROM users WHERE referal_code = '$referee_code' ";
                            $select_referee = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($select_referee, MYSQLI_ASSOC);
                            $referee_wallet= $row['referee_wallet'];
                            $referal_earning= $row['referal_earning'];
        
                            
                            $temp_bonus = ($rb/100) * $capital;
                            $new_referee_wallet = $temp_bonus + $referee_wallet;
                            $new_ref_earning = $referal_earning + $temp_bonus;
        
                            $sql= "UPDATE users SET wallet='$new_referee_wallet',referal_earning='$new_ref_earning' WHERE referal_code = '$referee_code' ";
                            $update = mysqli_query($conn,$sql);
                        
                        }

                        $insert = "INSERT INTO investments(user_id,package,payment_date,exp_date,cash_date,amount)VALUES ('$id','$name','$tdate',DATE_ADD('$tdate', INTERVAL '$duration_in_days' DAY),DATE_ADD('$tdate', INTERVAL 30 DAY),'$capital') ";
                        $result = mysqli_query($conn,$insert);
                        $_SESSION['message']= "Investment Successful ";
                        header('Location:../inv.php');
                        die();

                    }
                    
                }else{
                    echo  mysqli_error($conn);
                        die();
                }
               
              
               
        }
    }
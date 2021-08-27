<?php
session_start();
include "../includes/dbconnection.php";
include "../includes/sm.php";

date_default_timezone_set('Africa/Lagos');
$tdate = date('Y-m-d');
               
$sql= " SELECT users.user_id,investments.amount,investments.id,investments.payment_date,investments.exp_date,investments.cash_date,investments.package FROM users JOIN investments ON investments.user_id = users.user_id WHERE (DATEDIFF(investments.exp_date,'$tdate')>=0)  ";
if($result = mysqli_query($conn,$sql)){ 
    if (mysqli_num_rows($result)>0){
            
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        
        {
                $invid=$row['id'];
                $id= $row['user_id'];
                $amount = $row['amount'];
                $paydate = $row['payment_date'];
                $expdate = $row['exp_date'];
                $cashdate = $row['cash_date'];
                $pack = $row['package'];

                $fetchpack= " SELECT * FROM package WHERE name = '$pack' ";
                    if($resultpack = mysqli_query($conn,$fetchpack)){ 
                            $rowpack = mysqli_fetch_array($resultpack, MYSQLI_ASSOC);
                            $roi = $rowpack['roi']; 
                            $roll_over = $rowpack['roll_over'];    
                            $duration = $rowpack['duration'];       
                        }

            
                if($roll_over=="No")
                { 

                $tdate_intime = strtotime($tdate);
                $cashdate_intime = strtotime($cashdate);
                $datediff_cash = $tdate_intime - $cashdate_intime;
                    
                    if ($datediff_cash == 0){
                        $sqluser= "SELECT wallet,email,first_name,last_name FROM users WHERE user_id = '$id' ";
                        $fetch = mysqli_query($conn,$sqluser);
                        if($fetch){
                            $rowuser = mysqli_fetch_array($fetch, MYSQLI_ASSOC);
                            $wallet= $rowuser['wallet'];
                            $fname= $rowuser['first_name'];
                            $lname= $rowuser['last_name'];
                            $fullname = $fname .$lname;
                            $email= $rowuser['email'];
                        }

                        
                        $eqty = ($roi/100) * $amount;
                        $new_wallet = $eqty + $wallet;
                        
                        $tdate_intime = strtotime($tdate);
                        $expdate_intime = strtotime($expdate);
                        $datediff = $tdate_intime - $expdate_intime;
                        
                        if($datediff==0){
                            $new_wallet = $new_wallet + $amount;
                            echo '<br>';
                            echo $datediff." ".$new_wallet;
                        }
                    
                        $sqlupdate= "UPDATE users SET wallet='$new_wallet'WHERE user_id = '$id' ";
                        $update = mysqli_query($conn,$sqlupdate);
                    
                        echo '<br>';
                        echo $id." ".$pack." ".$paydate." ".$expdate;

                        $sqllast= " UPDATE  investments SET cash_date = DATE_ADD('$tdate', INTERVAL 30 DAY) WHERE id ='$invid' ";
                        $resultlast = mysqli_query($conn,$sqllast);
                        sendEqyEmail($email,$packagename,$amt,$fullname);
                        die();

                     }
               
                }else{

                    $tdate_intime = strtotime($tdate);
                    $expdate_intime = strtotime($expdate);
                    $datediff = $tdate_intime - $expdate_intime;

                    if ($datediff == 0){
                        $sqluser= "SELECT wallet,email,first_name,last_name FROM users WHERE user_id = '$id' ";
                        $fetch = mysqli_query($conn,$sqluser);
                        if($fetch){
                            $rowuser = mysqli_fetch_array($fetch, MYSQLI_ASSOC);
                            $wallet= $rowuser['wallet'];
                            $fname= $rowuser['first_name'];
                            $lname= $rowuser['last_name'];
                            $fullname = $fname .$lname;
                            $email= $rowuser['email'];
                        }

                        
                        $eqty = ($roi/100) * $amount * $duration;
                        $returns = $amount + $eqty;
                        $new_wallet = $returns + $wallet;
                        echo '<br>';
                        echo $datediff." ".$new_wallet;
                        
                        $sqlupdate= "UPDATE users SET wallet='$new_wallet'WHERE user_id = '$id' ";
                        $update = mysqli_query($conn,$sqlupdate);
                    
                        echo '<br>';
                        echo $id." ".$pack." ".$paydate." ".$expdate."later";
                        sendEqyEmail($email,$packagename,$amt,$fullname);
                        die();

                     }


                }

            }
        }   
}else { 
echo mysqli_error($conn); 
} 


?>
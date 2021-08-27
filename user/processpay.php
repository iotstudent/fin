<?php
session_start();
$id = $_SESSION['logged'];
include"../includes/dbconnection.php";
if(isset($_GET['transaction_id'])){
    $transaction_id= $_GET['transaction_id'];
 }
 date_default_timezone_set('Africa/Lagos');
 $date = date('Y-m-d');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/$transaction_id/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization:FLWSECK_TEST-5c11e512c43ed1b29fc84e6c25401e55-X"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
if($response){
    $data = json_decode($response, true);
    $customer = $data["data"];
    $charged = $data["data"]["charged_amount"];

    // echo "<br>";
    // print_r($customer);

    // echo "<br>";
    // print($charged);


    $insert = " INSERT INTO transaction(description,type,amount,date,user_id,trans_code)VALUES ('Wallet Top up','deposit','$charged','$date','$id','$transaction_id') ";
    $result = mysqli_query($conn,$insert);
    if($result){

        $sql= "SELECT wallet,email,first_name,last_name FROM users WHERE user_id = '$id' ";
        $fetch = mysqli_query($conn,$sql);
        if($fetch){
            $row = mysqli_fetch_array($fetch, MYSQLI_ASSOC);
            $wallet_amt= $row['wallet'];
            $new_wallet = $wallet_amt + $charged;
    
            $sqllast= "UPDATE users SET wallet='$new_wallet' WHERE user_id = '$id' ";
            $update = mysqli_query($conn,$sqllast);    
            $_SESSION['message'] = " Wallet was successfully topped up ";
            header("Location:checkout.php");
            die();
        }
        
    }else{
         echo mysqli_error($conn); 
    }
}else {
        $_SESSION['error'] = " Wallet could not be topped up at this time";
        header("Location:checkout.php");
        die();
}


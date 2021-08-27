<?php 
session_start();
$id = $_SESSION['logged'];
$code = $_SESSION["code"];
if(!isset($_SESSION['logged'])){
	header('Location:../login.php');
    die();
  }
if (($_SESSION['status'] != 'verified')) {
    $_SESSION['error'] = "Check your mail for verification link";
    header("Location:../login.php");
    die();
}
include "includes/alerts.php";
include "includes/dbconnection.php";
include "includes/count.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <title>El-Chari</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2 bg-primary mobilenav">
            <div id="mySidenav" class="mysidenav">
                <center>
                    <img src="img/asset-03.png" style="max-width:80%;max-height:40%;">   
                </center>
              
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php">Dashboard</a>
                <a href="trans.php">Transaction</a>
                <a href="inv.php">Investments</a>
                <a href="ref.php">Referees</a>
                <a href="viewpackage.php">Packages</a>
                <a href="change.php">Password</a>
                <a href="logout.php">Logout</a>
            </div>
            <span class="text-white" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Menu</span>
            
                <script>
                function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                }
                function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                }
                </script>
            </div>
            <div class="col-md-2 bg-primary side-nav">
                <?php include "includes/side.php";?>
            </div>
            <div class="col-md-10">
                <?php include "includes/top.php";?>
                   
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="border: 5px;border-radius:.35rem;box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;margin-bottom:2%;">
                            <div class="card-body">
                                <h4 class="text-dark">Stats</h4>
                                <div class="row ">
                                    <div class="col">
                                        <p class="text-primary">INVESTMENTS</p>
                                        <?php countInv();?>
                                    </div>
                                    <div class="col">
                                        <p class="text-primary">REFERALS</p>
                                        <?php countRef();?>
                                    </div>
                                    <div class="col">
                                        <p class="text-primary">WITHDRAWALS</p>
                                        <?php countWith();?>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="border: 5px;border-radius:.35rem;box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;margin-bottom:2%;">
                            <div class="card-body">
                                <h4 class="text-dark">Balances</h4>
                                <div class="row ">
                                    <div class="col">
                                            <p class="text-primary">Wallet</p>
                                            <small>&#x20A6</small> <?php sumWallet();?>
                                    </div>
                                    <div class="col">
                                            <p class="text-primary">Referal Earnings</p>
                                            <small>&#x20A6</small> <?php sumRef();?>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            </div>
                    </div>
                </div>
                
                <div class="row ">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                               Investments
                            </div>
                            <div class="card-body">
                                      <table  class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Package</th>
                                                <th>Amount</th>
                                                <th>Payment Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                    <?php
                
                            $sql= " SELECT users.first_name,users.middle_name,users.last_name,investments.amount,investments.payment_date,investments.exp_date,investments.package FROM users JOIN investments ON investments.user_id = users.user_id WHERE investments.user_id ='$id' LIMIT 2";
                            if($result = mysqli_query($conn,$sql)){ 
                                    if (mysqli_num_rows($result)>0){
                                        $n=1;
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            $id= $row['id'];
                                            $amount = $row['amount'];
                                            $paydate = $row['payment_date'];
                                            $expdate = $row['exp_date'];
                                            $pack = $row['package'];
                         
                                ?>
                                
                                        <tr>
                                            <td><?php echo  $n;?></td>
                                            <td><?php echo  $pack;?></td>
                                            <td><?php echo  $amount;?></td>
                                            <td><?php echo  $paydate;?></td>
                                            <td><?php echo  $expdate;?></td>
                                        </tr>
                                      
                                        <?php  
                            $n++;    
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

            
                  ?>
                                      
                                    </tbody>
                                    </table> 
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="border: 5px;border-radius:.35rem;box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;margin-bottom:5%;">
                            <div class="card-body">
                                <a href="inv.php" type="button" class="btn btn-primary btn-lg btn-block mb-5">Invest </a>
                                <a href="checkout.php" type="button" class="btn btn-outline-secondary btn-lg btn-block mb-5">Deposit</a>
                                <button type="button" class="btn btn-outline-success btn-lg btn-block">Withdraw</button>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   



  <script src="js/datatable.js"></script>
</body>
</html>
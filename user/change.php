<?php
session_start();
$id = $_SESSION['logged'];
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&amp;display=swap" rel="stylesheet">
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
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            
                            <div class="card-body">
                                <form action="process/processchange.php" method="post">
                                    <div class="form-group">
                                            <?php success_alert();error_alert();?>
                                        </div>
                                    <div class="form-group">
                                        <label>Enter Current  Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="cpassword">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter New  Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="npassword">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="rnpassword">
                                    </div>
                         
                                        <div class="form-group">
                                            <input type="submit" value="Change" class="btn btn-primary mb-2 mt-2 btn-lg btn-block">
                                        </div>
                                       
                                    </form> 
                            </div>
                          </div>
                    </div>
                  
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>
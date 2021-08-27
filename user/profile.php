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
include "includes/dbconnection.php";
include "includes/count.php";
    
        $sql= " SELECT * FROM users WHERE user_id = '$id' ";
        if($result = mysqli_query($conn,$sql)){ 
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $fname = $row['first_name'];
                $lname = $row['last_name'];
                $mname = $row['middle_name'];
                $phone = $row['phone_number'];
                $telegram = $row['telegram'];
                $email = $row['email'];
                $dob = $row['dob'];
                $address = $row['address'];
                $bank = $row['bank_name'];
                $acc_name = $row['account_name'];
                $acc_num = $row['account_number'];
                $user_pic = $row['user_picture'];
                }
        }else { 
                mysqli_error($conn); 
        } 
        
    
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
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                               Profile
                               <span class="btn btn-primary float-right text-white"><a  class="text-white" href="kyc.php">KYC</a></span>
                            </div>
                            <div class="card-body">
                                <form action="process/processprofile.php" method="post">
                                    <div class="form-group">
                                            <?php success_alert();error_alert();?>
                                        </div>
                                        <div class="form-row">
                                    <div class="col">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                            </div>
                            <div class="col">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                            </div>
                            <div class="col">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="mname" value="<?php echo $mname; ?>">
                            </div>
                            </div>
                            <br>
                            <div class="form-row">
                            <div class="col">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="col">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>">
                            </div>
                            <div class="col">
                                <label>Telegram Number</label>
                                <input type="text" class="form-control" placeholder="Telegram Number" name="telegram" value="<?php echo $telegram; ?>">
                            </div>
                            </div>
                            <br>
                            <div class="form-row">
                            <div class="col">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $address; ?>">
                            </div>
                            <div class="col">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" placeholder="Date of Birth" name="dob" value="<?php echo $dob; ?>">
                            </div>
                            </div>
                            <br>
                            <div class="form-row">
                            <div class="col">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" placeholder="Bank Name" name="bank" value="<?php echo $bank; ?>">
                            </div>
                            <div class="col">
                                <label>Account Name</label>
                                <input type="text" class="form-control" placeholder="Account Name" name="acc" value="<?php echo $acc_name; ?>">
                            </div>
                            <div class="col">
                                <label>Account Number</label>
                                <input type="text" class="form-control" placeholder="Account Number" name="accnum" value="<?php echo $acc_num; ?>">
                            </div>
                            </div>
                                     
                                        
                                        <div class="form-group">
                                            <input type="submit" name="edit" value="Update" class="btn btn-success mb-2 mt-2" style="float:right;">
                                        </div>
                                    </form> 
                            </div>
                          </div>
                    </div>
                  
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                               Profile picture
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <img src="<?php echo $user_pic;?>" class="img-fluid" style="height:200px;">
                                    </div>
                                </div>
                                <form action="process/processprofile.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" class="form-control"  name="attachment">
                                    </div>
                                    
                                        <div class="form-group">
                                            <input type="submit" name="pic" value="Upload Picture" class="btn btn-success mb-2 mt-2" style="float:right;">
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
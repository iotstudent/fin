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
include "includes/dbconnection.php";
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
                <div class="col-md-8 offset-md-2 flash">
                <?php error_alert();success_alert();?>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                               Pacakages
                            </div>
                            <div class="card-body">
                                      <table id="table_id" class="display table table-responsive">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Capital<small>(&#x20A6)</small></th>
                                                <th>ROI<small>(%)</small></th>
                                                <th>Duration<small>(Months)</small></th>
                                                <th>Referal Bonus <small>(%)</small></th>
                                                <th>Roll over</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php


$sql= " SELECT * FROM package ";
if($result = mysqli_query($conn,$sql)){ 
if (mysqli_num_rows($result)>0){
    $n=1;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $pid= $row['package_id'];
        $name = $row['name'];
        $roi = $row['roi'];
        $capital = $row['capital'];
        $ro = $row['roll_over'];
        $rb = $row['referal_bonus'];
        $duration = $row['duration'];

?>

    <tr>
        <td><?php echo  $n;?></td>
        <td><?php echo  $name;?></td>
        <td><?php echo  $capital;?></td>
        <td><?php echo  $roi;?></td>
        <td><?php echo  $duration;?></td>
        <td><?php echo  $rb;?></td>
        <td><?php echo  $ro;?></td>
  <td>
  <form action="process/processinv.php" method='post' style="display: inline;">
        <input type='hidden'  name='packid' value="<?php echo $pid; ?>" />
        <button type='submit' name='invest' class="btn btn-success"/>Invest</button>
  </form>
</td>  
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
                  
                </div>
            </div>
        </div>
    </div>

  
    <script src="js/datatable.js"></script>
</body>
</html>
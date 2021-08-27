<?php 
session_start();
if(!isset($_SESSION['elcharilogged'])){
	header('Location:login.php');
  }
include "includes/dbconnection.php";
include "includes/alerts.php";
?>

<?php
    
    if(isset($_GET['edit'])){
        $packid= $_GET['packid'];
        $sql= " SELECT * FROM package WHERE package_id = '$packid' ";
        if($result = mysqli_query($conn,$sql)){ 
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $id= $row['package_id'];
                $name = $row['name'];
                $roi = $row['roi'];
                $capital = $row['capital'];
                $ro = $row['roll_over'];
                $rb = $row['referal_bonus'];
                $duration = $row['duration'];
                $roi_capital = $row['roi_capital'];
                }
        }else { 
                mysqli_error($conn); 
        } 
        
     }
    
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>El-Chari Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
            <?php include "includes/side.php";?>
    </aside>
   

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

<div class="header-menu">

    <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
    </div>
    <div class="col-sm-5">
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="images/avatar.svg" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
                <a class="nav-link" href="change.php"><i class="fa fa-lock"></i>  Change Password</a>

                <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
            </div>
        </div>
    </div>
</div>

</header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header"><strong>Edit Package</strong></div>
                            <div class="card-body card-block">
                                <form action="process/processpack.php" method="post">
                                <div class="form-group">
                                        <?php success_alert();error_alert();?>
                                    </div>
                                <div class="form-group">
                                    <label for="Pacakage name" class=" form-control-label">Package Name</label>
                                    <input type="text" id="company" placeholder="Enter Pacakage name" name="name" value="<?php echo $name; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                            <label for="capital" class=" form-control-label">Capital</label>
                                            <input type="number" id="street" placeholder="Capital" name="capital" value="<?php echo $capital; ?>" class="form-control">
                                        </div>
                                    <div class="form-group">
                                        <label for="roi" class=" form-control-label">ROI (%)</label>
                                        <input type="number"  step="0.1" id="vat" placeholder="ROI" class="form-control" name="roi" value="<?php echo $roi; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="roi" class=" form-control-label">ROI + Capital</label>
                                        <input type="number"  id="vat" placeholder="ROI+Capital" class="form-control" name="roi_capital" value="<?php echo $roi_capital; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="duration" class=" form-control-label">Duration (months)</label>
                                        <input type="number" min=1 id="vat" placeholder="Duration" class="form-control" name="duration" value="<?php echo $duration;?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="referal bonus" class=" form-control-label">Referal Bonus (%)</label>
                                        <input type="number"  step="0.1" id="vat" placeholder="Referal Bonus" class="form-control" name="rb" value="<?php echo $rb;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="roll over" class=" form-control-label">Roll over</label>
                                        <select name="ro" id="select" class="form-control">
                                                <option value="<?php echo $ro; ?>"><?php echo $ro;?></option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <input type="hidden"name="packid" value="<?php echo $id; ?>">
                                        <input type="submit" name="edit" value="Update" class="btn btn-success mb-2 mt-2" style="float:right;">
                                    </div>
                                </form>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>

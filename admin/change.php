<?php
session_start(); 
if(!isset($_SESSION['elcharilogged'])){
	header('Location:login.php');
  }
include "includes/alerts.php";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>El-Chari|Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/asset-01.png">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
            <?php include "includes/side.php";?>
    </aside><!-- /#left-panel -->

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
                            <a class="nav-link" href="#"><i class="fa fa-lock"></i>  Change Password</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">

         
            <div class="col-md-8 offset-md-2">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        
                    <form action="process/processchange.php" method="post">
                        <div class="form-group">
                            <?php success_alert();error_alert();?>
                        </div>
                        <div class="form-group">
                            <center>
                                 <h4>Reset Password</h4>
                            </center>
                        </div>
                        <div class="form-group">
                                <label> Current Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="cpassword">
                            </div>
                        <div class="form-group">
                                <label> New Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="npassword">
                            </div>
                        <div class="form-group">
                                <label>Re Enter Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="rnpassword">
                            </div>
                                <input type="submit" value="Change Password" class="btn btn-success btn-flat m-b-30 m-t-30">
                                
                    </form>

                    </div>
                </div>
            </div>
            <!--/.col-->

           
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
</body>
</html>

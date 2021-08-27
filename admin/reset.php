<?php
session_start(); 
include "includes/alerts.php";
//extract encrypted email from url 
if (isset($_GET['token'])) {
    $token = $_GET['token'];
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EL-Chari Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                
                <div class="login-form">
                    <form action="process/processreset.php" method="post">
                        <div class="form-group">
                            <?php success_alert();error_alert();?>
                        </div>
                        <div class="form-group">
                            <center>
                                 <h4>Reset Password</h4>
                            </center>
                        </div>
                        <div class="form-group">
                                <label> Enter New Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        <div class="form-group">
                                <label>Re Enter Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="cpassword">
                                <input  type="hidden" name="token" value="<?php echo $token ;?>" >
                            </div>
                                <input type="submit" value="Change Password" class="btn btn-success btn-flat m-b-30 m-t-30">
                                
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

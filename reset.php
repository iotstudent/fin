<?php
session_start(); 
include "user/includes/alerts.php";
//extract encrypted email from url 
if (isset($_GET['token'])) {
    $token = $_GET['token'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El-Chari</title>
    <!-- favicon -->
  <link href="img/favicon.png" rel="icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- google font -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid" style="margin-top: 0px;">
        <div class="row">
          <div class="col-md-6" id="hero6">
    
          </div>
          <div class="col-md-6" style="margin-top: -50px; padding: 50px; background-color: #FEFEFF;" data-aos="fade-up" data-aos-delay="0">
            <form class="row g-3" id="contact3" action="user/process/processreset.php" method="post">
            <div class="form-group">
                    <?php success_alert();error_alert();?>
                </div>
                <center class="form-logo">
                    <a href="index.php" style-="float: none; text-align:center">
                    <img src="./img/logo1.png" alt="logo" width="200px"></a>
                </center>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Type New Password</label>
                <input type="password" class="form-control" id="inputEmail4" placeholder="Type New Password" name="password" required>
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="inputEmail4" placeholder="Confirm Password" name="cpassword" required>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-personal" style="margin-top: 10px; width: 100%; background-color: #032491; color: #fff;">Reset Password</button>
              </div>
              <div class="col-12">
                  <a href="login.php" style="float: right;" style="color: #000080  !important; font-weight: bold">Login instead</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
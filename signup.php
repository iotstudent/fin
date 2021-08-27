<?php 
session_start();
include "user/includes/alerts.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El-Chári Limited</title>
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
          <div class="col-md-6" id="hero7">
    
          </div>
          <div class="col-md-6" style="margin-top: -50px; padding: 50px; background-color: #FEFEFF;" data-aos="fade-up" data-aos-delay="0">
            <form class="row g-3" id="contact4" action="user/process/processregister.php" method="post">
            <div class="form-group">
                            <?php success_alert();error_alert();?>
                        </div>    
            <center class="form-logo">
                    <a href="index.php" style-="float: none; text-align:center">
                      <img src="./img/logo1.png" alt="logo" width="200px"></a>
                </center>
            <div class="col-12" style="margin-top: -50px;">
                <center>
                    <h5>It's Time to </h5>
                    <h2><strong>Create Wealth & Add value</strong></h2>
                    <p style="color: #B4B4B4;">Already Signed up? <a href="login.php" style="color: red;">Sign in</a></p>
                </center>
            </div>
              
            <div class="col-12">
                <label for="inputText" class="form-label" >First name*</label>
                <input type="text" class="form-control" id="inputText" placeholder="Enter First Name" required name="fname">
              </div>
              <div class="col-12">
                <label for="inputText" class="form-label" >First name*</label>
                <input type="text" class="form-control" id="inputText" placeholder="Enter Middle Name" required name="mname">
              </div>
              <div class="col-12">
                <label for="inputText" class="form-label" >Last name*</label>
                <input type="text" class="form-control" id="inputText" placeholder="Enter Last Name" required name="lname">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Email*</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Your email address" required name="email">
              </div>
              
              <div class="col-12">
                <label for="inputText" class="form-label">Password*</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Enter password" required name="password">
              </div>
              <div class="col-12">
                <label for="inputText" class="form-label">Confirm Password*</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Re-enter password" required name="cpassword">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Referral Code (if any)</label>
                <input type="text" class="form-control" id="inputText" placeholder="Enter referral code" name="refe">
              </div>
              <div class="col-12">
                <div class="form-check">
                  <label class="form-check-label" style="font-size: 14px; margin: 10px 0px;">
                    <input type="checkbox">
                    By clicking on Sign up you agree to our <a href="terms.php" style="color: #000080; font-weight: bold">Terms & Conditions</a>
                  </label>
                </div>
               </div> 
              <div class="col-12">
                <button type="submit" class="btn btn-personal" style="margin-top: 10px; width: 100%; background-color: #032491; color: #fff;">SIGN UP</button>
              </div>
              <div class="col-12">
                  <a href="forgot.php" style="float: right;">Forgot Password?</a>
              </div>
              <!-- <div class="col-12">
                <button type="submit" class="btn btn-personal" style="margin-top: 10px; width: 100%; color: #032491; background-color: #fff; border: 1px solid #032491;">Connect with Facebook</button>
                <button type="submit" class="btn btn-google" style="margin-top: 10px; width: 100%; color: red; background-color: #fff; border: 1px solid red;">Connect with Google</button>
              </div> -->
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
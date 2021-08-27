<?php session_start();?>
<?php include "user/includes/alerts.php"?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="" />
<meta name="keywords" content="" />
<!-- Favicon -->
<link href="images/sp1.png" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<title>El-Chári Limited</title>
</head>
<body>
  <!-- mobile -->
  <div class="container-fluid" style="padding: 0px 50px;">
    <nav class="navbar">
      <div class="logo"><a href="index.php"> <img src="./img/logo.png" style="width: 150px;" alt=""></a></div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="about.php">About Us</a></li>
          <li><a href="business.php">Our Businesses</a></li>
          <li><a href="invest.php">Investments</a></li>
          <li><a href="affiliate.php">Affiliates</a></li>
          <li><a href="academy.php">Academy</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="cta-button"><a class="btn btn-secondary" href="login.php">Login</a></li>
      </ul>
    </nav>
  </div>

<!-- breadcrumb -->
<div class="container-fluid breadcrumb">
  <div class="row">
    <div class="col-md-5">
      <p>HOME .CONTACT US</p>
      <h1>CONTACT US</h1>
    </div>
    <div class="col-md-7">

    </div>
  </div>
</div>

<!-- contact section -->
<div class="container main-contact">
  <div class="row">
    <div class="col-md-8 shadow p-3 mb-5 bg-white" id="main-form">
       <center> <p style="font-size: 45px; color: #000080;">WE LOVE TO HEAR FROM YOU</p></center>
        <form class="row g-3" style="padding: 50px; margin-top: -50px;" action="user/process/processcontact.php" method="post">
        <?php success_alert();error_alert();?>
          <div class="col-md-12">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Your Name*" name="sendername">
          </div>
          <br>
          <div class="col-md-6">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Your email address*" name="senderemail">
          </div>
          <br>
          <div class="col-md-6">
            <label for="name">Phone number</label>
            <input type="text" class="form-control" id="inputPhone" placeholder="Your phone number *" name="senderphone">
          </div>
          <div class="col-md-6">
            <label for="name">Your Organization</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="your organization *" name="senderorg">
          </div>
          <div class="col-md-6">
            <label for="name">Enter Subject</label>
            <input type="text" class="form-control" id="inputSubject" placeholder="subject*" name="subject">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Your Message</label>
            <textarea name="sendermessage" id="" class="form-control" cols="10" rows="5"></textarea>
          </div>
          <div class="col-12" style="margin-top: 40px; margin-left: 0px;">
            <button type="submit" class="btn btn-primary">SEND MESSAGE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </form>
    </div>
    <div class="col-md-4 left-cont">
        <h6 style="font-weight:600; font-size: 18px;">OUR OFFICE ADDRESS</h6>
        <br>
        <h6 style="line-height: 2;">Lorem Ipsum Dolor Sit Amet,
          Consetetur Sadipscing Elitr, Sed
          Diam Nonumy Eirmod Tempor
          Invidunt Ut Labore Et Dolore Magna
          Aliquyam Erat, Sed Diam Voluptua.
          At Vero Eos Et Accusam Et Justo</h6>
          <br>
          <h6 style="font-weight:600; font-size: 18px;">TALK TO US:</h6>
          <br>
          <h6 style="line-height: 2;">Email: Info@El-Chari.Com <br>
            Phone: (461) 000-0000-000</h6>
    </div>
  </div>
</div>
<!-- footer -->

<div class="container-fluid foot">
  <div class="row main-foot">
    <div class="col-md-4 col-sm-3">
      <a href="index.php"><img src="./img/logo.png" alt="" width="40%"></a>
      <br>
      <p style="margin-top: 20px;">We are a Nigerian investment company run by a
        strong team of experienced traders and industry
        professionals from various fields.</p>
        <div class="socials">
          <img src="./img/social1.png" alt="" width="40px">
          <img src="./img/social3.png" alt="" width="40px">
          <img src="./img/social4.png" alt="" width="40px">
          <img src="./img/social2.png" alt="" width="40px">
        </div>
    </div>
    <div class="col-md-4 col-sm-3 links1">
      <h4 style="font-size: 20px; font-weight: 600; margin-bottom: -10px;">Quick Links</h4>
      <br>
      <div class="row">
        <div class="col-md-6 links2">
          <nav>
            <ul>
              <a href="invest.php"><li>Investment</li></a>
              <a href="academy.php"><li>Trading academy</li></a>
              <a href="oil.php"><li>Oil & Gas</li></a>
              <a href="gold.php"><li>Gold exchange</li></a>
            </ul>
          </nav>
        </div>
        <div class="col-md-6 links3">
          <nav>
            <ul>
              <a href="real-estate.php"><li>Real estate</li></a>
              <a href="digital-ads.php"><li>Digital advertisement</li></a>
              <a href="agric.php"><li>Agriculture</li></a> <br>
              <a href="affiliate.php"><li>Affiliates</li></a>
            </ul>
          </nav>
        </div>
    </div>
  </div>
  
  <?php include "includes/newsform.php"?>

</div>

<div class="container-fluid" style="padding-left: 50px; padding-right: 50px; color: #fff; padding-top: 30px;">
  <hr style="border-bottom: 1px solid #fff;">
  <div class="row">
    <div class="col-md-4">
        <p>Copyright 2021 .<span style="color: #0080FE;">El-Chári</span> All Right Reserved.</p>
    </div>
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-5">
          <a href="terms.php"><p>Terms & Conditions</p></a>
        </div>
        <div class="col-md-3">
          <a href="about.php"><p>About Us</p></a>
        </div>
        <div class="col-md-4">
          <a href="contact.php"><p>Contact Us</p></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!-- footer mobile -->
<footer id="mobile" style="color: #fff; margin-top: 20px;">
  <div class="container-fluid">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3 col-sm-6" style="margin-bottom: 30px;">
        <img src="img/logo.png" class="logo1" alt="" width="200px">
        <br><br><br>
        <p class="para">We are a Nigerian investment company run by a
          strong team of experienced traders and industry
          professionals from various fields.</p>
          <br>
          <div class="socials">
            <img src="./img/social1.png" alt="" width="40px">
            <img src="./img/social3.png" alt="" width="40px">
            <img src="./img/social4.png" alt="" width="40px">
            <img src="./img/social2.png" alt="" width="40px">
          </div>
      </div>
      <br> <br>
      <div class="col-lg-2 col-sm-6">
        <div class="footer-widget">
          <h3>Quick Links</h3>
          <ul class="list-unstyled">
            <a href="invest.php"><li>Investment</li></a>
            <a href="academy.php"><li>Trading academy</li></a>
            <a href="oil.php"><li>Oil & Gas</li></a>
            <a href="gold.php"><li>Gold exchange</li></a>
          </ul>
        </div>
      </div>
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
          <!-- <h3>Contact info</h3> -->
          <ul class="list-unstyled">
            <a href="real-estate.php"><li>Real estate</li></a>
              <a href="digital-ads.php"><li>Digital advertisement</li></a>
              <a href="agric.php"><li>Agriculture</li></a>
              <a href="affiliate.php"><li>Affiliates</li></a>
          </ul>
        </div>
      </div>
        <div class="col-lg-4 col-sm-6">
        <div class="footer-widget">
          <h3>Newsletter</h3>
          <ul class="list-unstyled">
            <p style="font-size: 14px; margin-top: -10px;" class="para">Instant Sign Up. Cancel Anytime.<br> No Credit
              Card Required</p>
            <br>
            <form class="row g-3" method="POST" id="subscribeForm1">
              <div class="col-12">
                <div id="subscriber_error_feedback1"></div>
              </div>
              <div class="col-6">
                <label for="staticEmail2" class="visually-hidden"></label>
                <input type="email" name="email1" class="form-control" id="inputEmail4" placeholder="your email address" style="padding: 15px; margin-top: -25px;margin-right: -100px;" required/>
              </div>
              <div class="col-6">
                <button class="btn btn-secondary" style="color: #fff; background-color: #0080FE; border: none;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </div>
            </form>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid bottom-foot" style="padding-left: 50px; padding-right: 50px; color: #fff; padding-top: 30px; font-size: 14px;">
      <hr style="border-bottom: 1px solid #fff;">
      <div class="row">
        <div class="col-md-4">
            <p>Copyright 2021 .<span style="color: #0080FE;">El-Chári</span> All Right Reserved.</p>
        </div>
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-5">
              <a href="terms.php"><p>Terms & Conditions</p></a>
            </div>
            <div class="col-md-3">
              <a href="about.php"><p>About Us</p></a>
            </div>
            <div class="col-md-4">
              <a href="contact.php"><p>Contact Us</p></a>
            </div>
          </div>
        </div>
      </div>
  </div>
</footer>



<div id="overlayer"></div>
<div class="loader">
<div class="spinner-border" role="status">
<span class="sr-only">Loading...</span>
</div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>
</html>
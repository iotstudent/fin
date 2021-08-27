<?php session_start();
$id = $_SESSION['logged'];
include "includes/alerts.php";
include "includes/dbconnection.php";
?>
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
    <div class="col-md-7">
      <p>HOME. INVESTMENT</p>
      <h1> INVESTMENT PLANS</h1>
    </div>
    <div class="col-md-5">

    </div>
  </div>
</div>


<div class="container affiliate">
  <center>
    <h1>INVESTMENT</h1>
    <h6>SELECT YOUR DESIRED PACKAGE</h6>
    <h5>Investment Is Open From 1St To 15Th Of Each Month!</h5>
  </center>
</div>

<div class="wrapper">
  <input type="radio" name="slider" checked id="home">
  <input type="radio" name="slider" id="blog">
  <input type="radio" name="slider" id="code">
  <nav>
    <label for="home" class="home"><i class="fas fa-home"></i>JADE PLAN</label>
    <label for="blog" class="blog"></i>AMBER PLAN</label>
    <label for="code" class="code">GARNET ROLLOVER PLAN</label>
    <div class="slider"></div>
  </nav>
  <section>
    <div class="content content-1">
      <div class="row" style="margin-top: 120px;">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-1">
              <img src="./img/01.png" alt="" width="40px">
          </div>
          <div class="col-md-11">
            <h5 style="font-weight: 600; font-size: 24px;">Get 7% ROI + Capital monthly on any of our packages.</h5>
          </div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php
                

        $sql= " SELECT * FROM package WHERE duration=1";
        if($result = mysqli_query($conn,$sql)){ 
                if (mysqli_num_rows($result)>0){
                    $n=1;
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $pid= $row['package_id'];
                        $name = $row['name'];
                        $roi = $row['roi'];
                        $roi_capital = $row['roi_capital'];
                        $capital = $row['capital'];
                        $ro = $row['roll_over'];
                        $rb = $row['referal_bonus'];
                        $duration = $row['duration'];
                        
        ?>
        <div class="col-md-4 invest1">
          <h5><?php echo $name;?></h5>
          <h6>Amount</h6>
          <p><?php echo $capital?></p>
          <hr color="#fff">
          <h6>ROI + Capital</h6>
          <p><?php echo $roi_capital?></p>
          <hr color="#fff">
          <form action="user/process/processinv.php" method="post">
          <input type="hidden" name="packid" value="<?php echo $pid;?>">
          <button type="submit" name="invest" class="btn btn-secondary" style="margin-top: 30px;"> CHOOSE <?php echo $name;?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </form>
        </div>
        <?php  
                            $n++;    
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

            
                  ?>
       
      </div>
    </div>
    <div class="content content-2">
      <div class="row" style="margin-top: 120px;">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-1">
              <img src="./img/02.png" alt="" width="40px">
          </div>
          <div class="col-md-11">
            <h5 style="font-weight: 600; font-size: 24px;">Get 8.5% ROI Monthly + Capital On The Third Month On Any Of Our Packages.</h5>
          </div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php
                

                $sql= " SELECT * FROM package WHERE duration=3 AND roll_over ='No'";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $id= $row['package_id'];
                                $name = $row['name'];
                                $roi = $row['roi'];
                                $roi_capital = $row['roi_capital'];
                                $capital = $row['capital'];
                                $ro = $row['roll_over'];
                                $rb = $row['referal_bonus'];
                                $duration = $row['duration'];
                                
                ?>
                <div class="col-md-4 invest1">
                  <h5><?php echo $name;?></h5>
                  <h6>Amount</h6>
                  <p><?php echo $capital?></p>
                  <hr color="#fff">
                  <h6>ROI + Capital</h6>
                  <p><?php echo $roi_capital?></p>
                  <hr color="#fff">
                  <form action="user/process/processinv.php" method="post">
                  <input type="hidden" name="packid" value="<?php echo $pid;?>">
                  <button type="submit" name="invest" class="btn btn-secondary" style="margin-top: 30px;"> CHOOSE <?php echo $name;?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                  </form>
                </div>
                <?php  
                                    $n++;    
                                }
                                }   
                            }else { 
                                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                            } 
        
                    
                          ?>
       
      </div>
    </div>
    <div class="content content-3">
         <div class="row" style="margin-top: 120px;">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-1">
              <img src="./img/03.png" alt="" width="40px">
          </div>
          <div class="col-md-11">
            <h5 style="font-weight: 600; font-size: 24px;">Get 30% ROI + Capital after 3 months on any of our packages.</h5>
          </div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php
                

                $sql= " SELECT * FROM package WHERE duration=3 AND roll_over ='Yes'";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $id= $row['package_id'];
                                $name = $row['name'];
                                $roi = $row['roi'];
                                $roi_capital = $row['roi_capital'];
                                $capital = $row['capital'];
                                $ro = $row['roll_over'];
                                $rb = $row['referal_bonus'];
                                $duration = $row['duration'];
                                
                ?>
                <div class="col-md-4 invest1">
                  <h5><?php echo $name;?></h5>
                  <h6>Amount</h6>
                  <p><?php echo $capital?></p>
                  <hr color="#fff">
                  <h6>ROI + Capital</h6>
                  <p><?php echo $roi_capital?></p>
                  <hr color="#fff">
                  <form action="user/process/processinv.php" method="post">
                  <input type="hidden" name="packid" value="<?php echo $pid;?>">
                  <button type="submit" name="invest" class="btn btn-secondary" style="margin-top: 30px;"> CHOOSE <?php echo $name;?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                  </form>
                </div>
                <?php  
                                    $n++;    
                                }
                                }   
                            }else { 
                                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                            } 
        
                    
                          ?>
       
      </div>
  </section>
</div>


<div class="container affiliate">
  <center>
    <h6>OUR REFERRAL BONUSES</h6>
    <h5>You get 0.4%-1.5% of the amount invested by your
      referral as a bonus on your investment.</h5>
  </center>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
          <div class="card-body">
              <center>
                <h5 style="font-weight: 600;">Aqua</h5>
              <h6 style="font-weight: 500;">( NGN 50,000 ) - 1,500</h6>
              </center>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
          <div class="card-body">
              <center>
                <h5 style="font-weight: 600;">Tifanny</h5>
              <h6 style="font-weight: 500;">( NGN 100,00 ) - 3,000</h6>
              </center>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
          <div class="card-body">
              <center>
                <h5 style="font-weight: 600;">Cobalt</h5>
              <h6 style="font-weight: 500;">( NGN 250,000) - 6,500</h6>
              </center>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
          <div class="card-body">
              <center>
                <h5 style="font-weight: 600;">Regal</h5>
              <h6 style="font-weight: 500;">( NGN 500,000 ) - 10,000</h6>
              </center>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
          <div class="card-body">
              <center>
                <h5 style="font-weight: 600;">Navy</h5>
              <h6 style="font-weight: 500;">( NGN 1,000,000 ) - 15,000</h6>
              </center>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
          <div class="card-body">
              <center>
                <h5 style="font-weight: 600;">Royal</h5>
              <h6 style="font-weight: 500;">( NGN 5,000,000) - 40,000</h6>
              </center>
          </div>
        </div>
      </div>
    </div>
</div>


<div class="container contact">
  <center>
    <h5 style="margin-bottom: 30px;">CONTACT US</h5>
    <h5 style="color: #000; margin-bottom: 70px;">We Are Here To Help You</h5>
  </center>
</div>

<div class="container footer-cont shadow p-3 mb-5 bg-white rounded">
 <?php include "includes/lowerform.php"?>
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
<footer id="mobile" style="color: #fff; margin-top: 0px !important;">
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
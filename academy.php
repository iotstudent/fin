<?php session_start();?>
<?php include "includes/alerts.php";?>
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

<!-- hero -->
<div class="hero acad">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/acad1.png" alt="First slide">
        <div class="carousel-caption  d-md-block" style="margin-top: -50px;">
          <img src="./img/play.png" alt="" id="play-icon">
          <h2>WELCOME TO EL-CHARI TRADING ACADEMY</h2>
          <p>Our mission is to help our clients grasp the fundamental and technical knowledge
            behind profitable foreign exchange and cryptocurrency trading to improve the quality
            of their lives.
            </p>
            <button class="btn btn-secondary" onclick="location.href='acad-form.php'" style="font-size: 14px;">SIGN ME UP <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container affiliate" data-aos="fade-up" data-aos-delay="100">
  <center>
    <h1>SERVICES</h1>
    <h6>DISCOVER HASSLE-FREE BUSINESS</h6>
    <h5 style="padding: 0px 120px">Whether You’re A Beginner Or An Experienced Trader, We
      Offer You A Range Of Courses Offering Guidance About The
      Financial Markets.</h5>
  </center>
</div>

<div class="container-fluid acad-course" style="padding: 0px 100px;" data-aos="fade-up" data-aos-delay="100">
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/acad2.png" alt="" width="100%">
          <h5 class="card-title" style="font-size: 20px; font-weight: bold; margin-top: 20px; padding: 5px;">Cryptocurrency Trading</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE; margin-left: 5px; ">
          <p class="card-text" style="font-size: 12px; font-weight: 500; padding: 5px;">Our crypto trading course begins with a free
            introductory class on cryptocurrency and
            continues with advanced paid classes until
            you can generate signals on your own and
            become a pro trader.</p>
          <a href="crypto.php" class="btn btn-primary" style="margin: 20px 0px"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/acad3.png" alt="" width="100%">
          <h5 class="card-title" style="font-size: 20px; font-weight: bold; margin-top: 20px; padding: 5px;">Forex Trading</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE; margin-left: 5px;">
          <p class="card-text" style="font-size: 12px; font-weight: 500; padding: 5px;">Foreign exchange, also known as Forex or FX trading is the process of converting one currency to another for various reasons such as commerce, tourism, or trading.</p>
          <a href="forex.php" class="btn btn-primary" style="margin: 30px 0px;"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/acad4.png" alt="" width="100%">
          <h5 class="card-title" style="font-size: 20px; font-weight: bold; margin-top: 20px; padding: 5px;">Signals</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE; margin-left: 5px;">
          <p class="card-text" style="font-size: 12px; font-weight: 500; padding: 5px;">We review cryptocurrency exchange throughout the day, providing up-to-date, accurate cryptocurrency predictions based on knowledge and experience, to ensure you make profits from your trading</p>
          <a href="signal.php" class="btn btn-primary" style="margin: 20px 0px"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid acad-serv" data-aos="fade-up" data-aos-delay="100">
  <div class="row">
    <div class="col-md-6">
        <img src="./img/acad7.png" alt="" width="97%">
    </div>
    <div class="col-md-6">
      <h6 style="color: #000080; font-weight: 600;">OUR OFFER COURSES</h6>
      <h1>Trust That We Are Working
        The Best Financial Solution</h1>
      <p>Whether you're a beginner or a professional trader, you'll find the
        right course for you on this platform.</p>
      <br>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cryptocurrency Trading Class</a>
        </li>
        <li class="nav-item" role="presentation" style="margin-left: 20px;">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Forex Trading Class</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p style="font-size: 13px;">We start crypto trading program with a free cryptocurrency class from beginners. This
            course offers some basic concepts to help better understand crptocurrency before
            diving deep into trading and earning crpto profits daily.</p>
            <a href="course-details.php" class="btn btn-primary" style="margin: 20px 0px"> VIEW COURSES <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <p style="font-size: 13px;">Foreign exchange, also known as Forex or FX trading is the process of converting one currency to another for various reasons such as commerce, tourism, or trading. </p>
            <a href="course-details.php" class="btn btn-primary" style="margin: 20px 0px"> VIEW COURSES <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid acad-info" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-md-5" style="text-align: right; margin-top: 70px;">
          <h5>OUR BEST OFFERS</h5>
          <h1 style="font-size: 52px; font-weight: 700;">We Are The Best
            In Finance</h1>
      </div>
      <div class="col-md-7" style="margin-left: 40px; border-left: 2px solid #fff; margin-right: -40px;">
          <h4 style="font-size: 20px;">Whether you’re a beginner or a professional trader, you’ll find
            just the right course for you on this platform.This course offers
            some basic concepts to help better understand
            cryptocurrency before delving</h4>
          <a href="#"> <strong style="font-size: 22px;">Watch the video</strong>
            <br> <span style="font-size: 14px;">know more about course</span></a>
      </div>
    </div>
</div>

<div class="container-fluid serv-section" style="background-image: none;">
  <div class="container">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-6 info">
        <h5>TESTIMONIALS</h5>
        <h4>CLIENT REVIEWS</h4>
      </div>
      <div class="col-md-3 joint">
        
      </div>
      <div class="col-md-3 calling">
        <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
           
          </div>
          <div class="col-md-3">
            
          </div>
        </div>
      </div>
    </div>
   

    <!-- testimonial -->
    <div class="owl-carousel owl-theme">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <blockquote>
            <div class="row">
              <div class="col-md-9 test">
                <h6>Confidence Clinton</h6>
                <p>Frontend Dev</p>
              </div>
              <div class="col-md-3">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
            <p style="font-size: 13px;">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
            </blockquote>
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <blockquote>
            <div class="row">
              <div class="col-md-9 test">
                <h6>Confidence Clinton</h6>
                <p>Frontend Dev</p>
              </div>
              <div class="col-md-3">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
            <p style="font-size: 13px;">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
            </blockquote>
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <blockquote>
            <div class="row">
              <div class="col-md-9 test">
                <h6>Confidence Clinton</h6>
                <p>Frontend Dev</p>
              </div>
              <div class="col-md-3">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
            <p style="font-size: 13px;">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
            </blockquote>
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <blockquote>
            <div class="row">
              <div class="col-md-9 test">
                <h6>Confidence Clinton</h6>
                <p>Frontend Dev</p>
              </div>
              <div class="col-md-3">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
            <p style="font-size: 13px;">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.&rdquo;</p>
            </blockquote>
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
<script src="js/particles.min.js"></script>
<script src="js/effect.js"></script>
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
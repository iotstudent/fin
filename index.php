<?php session_start();?>
<?php include "includes/alerts.php";?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="theme-color" content="#f7f7f7">
<!-- Favicon -->
<link href="img/fav.png" rel="icon">
<link rel="apple-touch-icon" href="img/fav.png">
<link rel="manifest" href="manifest.json">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<title>El-Chári Limited</title>
</head>
<body style="overflow-x: hidden;">

  <!-- mobile -->
<div id="particles-js"></div>
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
<div id="carouselExampleIndicators" class="carousel mob-desk slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/banner-1.png" alt="First slide">
        <div class="carousel-caption">
          <h1>YOU INVEST IT,WE GROW IT</h1>
          <p>We are professional traders and business owners with years of experience generating
            profits from forex trading, crypto trading, and various business investments.</p>
            <button class="btn btn-secondary" onclick="location.href='signup.php'">OPEN AN ACCOUNT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/banner-2.png" alt="Second slide">
        <div class="carousel-caption">
          <h1>YOU INVEST IT,WE GROW IT</h1>
          <p>We are professional traders and business owners with years of experience generating
            profits from forex trading, crypto trading, and various business investments.</p>
            <button class="btn btn-secondary" onclick="location.href='signup.php'">OPEN AN ACCOUNT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- hero -->
<div id="carouselExampleIndicators" class="carousel slide mob-mobile" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/mob1.png" alt="First slide">
        <div class="carousel-caption">
          <h1>YOU INVEST IT,WE GROW IT</h1>
          <p>We are professional traders and business owners with years of experience generating
            profits from forex trading, crypto trading, and various business investments.</p>
            <button class="btn btn-secondary" onclick="location.href='signup.php'">OPEN AN ACCOUNT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/mob2.png" alt="Second slide">
        <div class="carousel-caption">
          <h1>YOU INVEST IT,WE GROW IT</h1>
          <p>We are professional traders and business owners with years of experience generating
            profits from forex trading, crypto trading, and various business investments.</p>
            <button class="btn btn-secondary" onclick="location.href='signup.php'">OPEN AN ACCOUNT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid abt-section"  data-aos="fade-up" data-aos-delay="100" id="content-desktop">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 info">
        <h5>ABOUT EL-Chári</h5>
        <h3>A strong team of
          experienced traders and
          industry professionals from
          various fields. </h3>
          <br>
          <p>The founders, Oyebola Olabode a financial literacy
            and investment enthusiast with reasonable years of
            experience in Human Resources and customer
            relations and Oluwasijibomi Alofe, a blockchain
            expert and crypto/forex technical analyst noticed
            the current trend in the investment sector.</p>
            <br>
          <a href="index.php" class="btn btn-primary">MORE ABOUT US <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
      </div>
      <div class="col-md-3 col-sm-3 joint">
        <div class="card exp" style="width: 22rem;">
          <div class="card-body">
            <img src="./img/icon4.png" alt="" width="45px">
            <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">ACCOUNTABILITY</h5>
            <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
            <p class="card-text" style="font-size: 12px; font-weight: 500;">We share every step of our journey with our investors
              and are fully responsible for every move we make
              towards achieving our long-term goals as a company.
              </p>
          </div>
        </div>
        <br>
        <div class="card exp" style="width: 22rem;">
          <div class="card-body">
            <img src="./img/icon4.png" alt="" width="45px">
            <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">EXCELLENCE</h5>
            <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
            <p class="card-text" style="font-size: 12px; font-weight: 500;">We always strive to achieve and maintain the highest
              standards of quality in the investment sector.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 calling" style="margin-right: 50px;">
        <img src="./img/12.png" alt="" width="550px">
      </div>
    </div>
  </div>
</div>


<div class="container-fluid serv-section" data-aos="fade-up" data-aos-delay="100">
  <div class="container">
    <div class="row">
      <div class="col-md-6 info">
        <h5>WHY INVEST WITH EL-Chári ?</h5>
        <h4>El-chari is well-equipped to guide your
          path and make your aspirations
          become reality.</h4>
      </div>
      <div class="col-md-3 joint">
        <p style="margin-top: 30px; font-size: 12px; margin-left: -100px;">Our vision is to be recognized as a successful and leading
          investment company in the provision of high-quality
          services to our clients.</p>
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
    
    <div class="owl-carousel owl-theme no-dots no-nav" id="owl2">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/icon1.png" alt="" width="45px">
          <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">AUTOMATIC INVESTMENT</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
          <p class="card-text" style="font-size: 12px; font-weight: 500;">You push in funds into our businesses and leave us to
            handle the rest. We deposit your capital and profit into
            your bank account at the end of your investment period</p>
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/icon2.png" alt="" width="45px">
          <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">MULTIPLE PACKAGES</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
          <p class="card-text" style="font-size: 12px; font-weight: 500;">Your goals are our goals. Our investment packages are
            tailored to suit your financial needs. So, you never have
            to put in more than you have or wait longer than you
            wish to receive your ROI.</p>
            <!-- wish to receive your ROI.</p> -->
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/icon3.png" alt="" width="45px">
          <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">BUSINESS VARIETIES
          </h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
          <p class="card-text" style="font-size: 12px; font-weight: 500;">When you fund your account, your investment goes into
            businesses with profitable returns. With a wide array of
            businesses under our belt, we never run out of ways to
            grow your money.</p>
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/icon4.png" alt="" width="100%">
          <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">TOP SECURITY</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
          <p class="card-text" style="font-size: 12px; font-weight: 500; padding-bottom: 20px;">El-Chari uses bank-level security, including 256-bit encryption and secure SSL connections to protect your information and money.</p>
        </div>
      </div>
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <div class="card-body">
          <img src="./img/icon5.png" alt="" width="100%">
          <h5 class="card-title" style="font-size: 14px; font-weight: bold; margin-top: 10px;">STANDARD PROFIT MARGINS</h5>
          <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
          <p class="card-text" style="font-size: 12px; font-weight: 500; padding-bottom: 20px;">You get at least 25% ROI on all our investment packages and can earn up to 100% ROI when you choose an advanced investment plan.</p>
        </div>
      </div>
 
    </div>
  </div>
</div>

<div class="container pac-section" data-aos="fade-up" data-aos-delay="100" id="pac-desktop">
    <center>
      <h2>It’s Not Too Late To Achieve Your Financial Goals.
        El-Chári Makes It Easier By Investing In Legitimate
        Businesses For You.</h2>
        <br>
        <a href="business.php" class="btn btn-secondary">CHOOSE A PACKAGE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </center>
</div>


<div class="container pac-section-mobile" data-aos="fade-up" data-aos-delay="100" id="pac-mobile">
  <center>
    <h2>It’s Not Too Late To Achieve Your Financial Goals.
      El-Chári Makes It Easier By Investing In Legitimate
      Businesses For You.</h2>
      <br>
      <a href="business.php" class="btn btn-secondary">CHOOSE A PACKAGE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
  </center>
</div>

<div class="container plans" data-aos="fade-up" data-aos-delay="100">
  <div class="row">
    <div class="col-md-7 cheri">
      <img src="./img/foot1.png" alt="" width="100%">
    </div>
    <div class="col-md-5 pac3">
      <h5>INVESTMENT PLANS</h5>
      <h6>Our investment process is simple. Investors
        only have to deposit their funds and wait for
        the returns.</h6>
        <div class="row count">
          <div class="col-md-2">
            <img src="./img/01.png" alt="" width="60%">
          </div>
          <div class="col-md-10">
            <h6>Monthly Plan</h6>
            <p>Get 7% ROI + capital monthly on any of our packages.</p>
            <hr>
          </div>
          <br>
          <div class="col-md-2">
            <img src="./img/02.png" alt="" width="60%">
          </div>
          <div class="col-md-10">
            <h6>Three-Months Plan</h6>
            <p>Get 8.5% ROI monthly + capital on the third month on any
              of our packages.</p>
            <hr>
          </div>
          <br>
          <div class="col-md-2">
            <img src="./img/03.png" alt="" width="60%">
          </div>
          <div class="col-md-10">
            <h6>Three-Months Rollover Plan</h6>
            <p>Get 30% ROI + Capital after 3 months on any of our
              packages.</p>
            <hr>
          </div>
        </div>
        <br>
        <a class="btn btn-primary" href="invest.php">SEE PACKAGES PLAN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="container-fluid serv-section">
  <div class="container">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-6 info">
        <h5>OUR BUSINESSES</h5>
        <h4>Our streamlined investment process
          requires nothing from you.</h4>
      </div>
      <div class="col-md-3 joint">
        <p style="margin-top: 30px; font-size: 12px;">Our Financial Advisors Determine The Right Businesses To
          Invest Your Money In, And You Watch It Rise Every Day</p>
      </div>
      <div class="col-md-3 calling">
        <div class="row">
          <div class="col-md-12" style="margin-left: 50px;">
              <a class="btn btn-primary" href="business.php">SEE MORE BUSINESS <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row pac2" data-aos="fade-up" data-aos-delay="100">
      <div class="col-sm-4 packages1">
        <p>01</p>
        <h4>Oil And Gas</h4>
        <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
        <h6>Tap into the global oil industry generating
          an estimated revenue of $3.3 trillion annually.</h6>
          <a class="btn btn-secondary" href="business.php"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
      </div>
      <div class="col-sm-4  packages2">
        <p>02</p>
        <h4>Gold Exchange</h4>
        <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
        <h6>When the stock market goes down, gold keeps
          us up.</h6>
          <a class="btn btn-secondary" href="business.php"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
      </div>
      <div class="col-sm-4 packages3">
        <p>03</p>
        <h4>Real Estate</h4>
        <hr align="left" style="width: 50px; border-bottom: 3px solid #0080FE;">
        <h6>We’ll be here even after you’ve achieved
          financial freedom.</h6>
        <a class="btn btn-secondary" href="business.php"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid serv-section" style="background-image: none;">
  <div class="container mobile-serv">
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
      <div class="card test1 shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
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
      <div class="card test1 shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
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
      <div class="card test1 shadow p-3 mb-5 bg-white rounded" style="width: 22rem;">
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
            <form class="row g-3" method="" id="subscribeForm1">
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

<script>
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker
      .register("sw.js")
      .then(function (registration) {
        console.log("success load");
      })
      .catch(function (err) {
        console.log(err);
      });
   }
</script>
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
<?php session_start();?>
<?php include "includes/alerts.php";?>
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
          <div class="col-md-6" id="hero6">
    
          </div>
          <div class="col-md-6" style="margin-top: -50px; padding: 50px; background-color: #FEFEFF;" data-aos="fade-up" data-aos-delay="0">
          <div class="form-group">
                <?php success_alert();error_alert();?>
            </div>   
          <form method="post" action="processaff.php" class="row g-3" id="contact3">
                <center class="form-logo">
                    <a href="index.php" style-="float: none; text-align:center">
                    <img src="./img/logo1.png" alt="logo" width="200px"></a>
                </center>
            <div class="col-12" style="margin-top:-70px;">
                <center>
                    <h2><strong>BOOK AN APPOINTMENT</strong></h2>
                </center>
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="your Name " name="name" required>
              </div> <br> 
            <div class="col-12">
                <label for="inputEmail4" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="inputPhone" placeholder="your Email" name="email" required>
              </div> <br>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="your phone number" name="phone" required>
              </div> <br> 
              <div class="col-12" style="margin-top: 20px;">
                <label for="inputText" class="form-label">State of Residence</label>
                <select class="form-control form-select" name="state" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option Value="abuja">ABUJA FCT</option>
                    <option value="abia">ABIA</option>
                    <option value="adamawa">ADAMAWA</option>
                    <option value="akwa ibom">AKWA IBOM</option>
                    <option value="anambra ">ANAMBRA</option>
                    <option value="bauchi">BAUCHI</option>
                    <option value="bayelsa">BAYELSA</option>
                    <option value="benue">BENUE</option>
                    <option value=borno"">BORNO</option>
                    <option value="cross river">CROSS RIVER</option>
                    <option value="delta">DELTA</option>
                    <option value="ebonyi">EBONYI</option>
                    <option value="edo">EDO</option>
                    <option value="ekiti">EKITI</option>
                    <option value="enugu">ENUGU</option>
                    <option value="gombe">GOMBE</option>
                    <option value="imo">IMO</option>
                    <option value="jigawa">JIGAWA</option>
                    <option value="kaduna">KADUNA</option>
                    <option value="kano">KANO</option>
                    <option value="katsina">KATSINA</option>
                    <option value="kebbi">KEBBI</option>
                    <option value="kogi">KOGI</option>
                    <option value="kwara">KWARA</option>
                    <option value="lagos">LAGOS</option>
                    <option value="nassarawa">NASSARAWA</option>
                    <option value="niger">NIGER</option>
                    <option value="ogun">OGUN</option>
                    <option value="ondo">ONDO</option>
                    <option value="osun">OSUN</option>
                    <option value="oyo">OYO</option>
                    <option value="plateau">PLATEAU</option>
                    <option value="rivers">RIVERS</option>
                    <option value="sokoto">SOKOTO</option>
                    <option value="taraba">TARABA</option>
                    <option value="yobe">YOBE</option>
                    <option value="zamfara">ZAMFARA</option>
                    </select>
              </div>
              <div class="col-12" style="margin-top: 20px;">
                <label for="inputSector" class="form-label">Sector of interest</label>
                <input type="text" class="form-control" id="inputSector" name="sector" placeholder="Sector of interest" required>
              </div> 
              <div class="col-12" >
                <button type="submit" class="btn btn-personal" style="margin-top: 10px; width: 100%; background-color: #032491; color: #fff;">SUBMIT</button>
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
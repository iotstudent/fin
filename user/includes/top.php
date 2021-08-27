<?php
    include "includes/dbconnection.php";
    
        $sql= " SELECT * FROM users WHERE user_id = '$id' ";
        if($result = mysqli_query($conn,$sql)){ 
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
                $fn = $row['first_name'];
                $ln = $row['last_name'];
                $upic = $row['user_picture'];
                }
        }else { 
                mysqli_error($conn); 
        } 
        
    
?>

<div class="row bg-white" style="margin-bottom:2%;">
                    <div class="col-md-3">
                        <h3 class="text-primary mt-2">Dashboard</h3>
                    </div>
                    <div class="col-md-6">
                        <p class=" mt-2 text-center text-primary">Referal code:<?php echo $_SESSION['code'];?></p>
                    </div>
                    <div class="col-md-3">
                        <span class="float-left mt-2 text-primary">Hello | <?php echo $fn." ".$ln;?></span>
                        <img src="<?php echo $upic;?>" class="float-right" style="height:60px;"> 
                    </div>
                </div>
<div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-7 right-foot">
      <?php
        $pagename= $_SERVER['SCRIPT_NAME'];
      ?>
      <form action="processfollow.php" method="POST">
           <?php success_alert();error_alert();?>
        <div class="form-group row">
          <div class="col-md-4 col-sm-3">
            <label for="name">Enter Name</label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control" placeholder="your name" name="sendername">
            <input type="hidden" value="<?php echo $pagename;?>" name="pagename">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4 col-sm-3">
            <label for="name">Phone number</label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control" placeholder="phone number *" name="senderphone">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4 col-sm-3">
            <label for="name">Your E-mail</label>
          </div>
          <div class="col-md-8">
            <input type="email" class="form-control" placeholder="your email *" name="senderemail">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-4 col-sm-3">
            <label for="inputAddress2" class="form-label">Your Message</label>
          </div>
          <div class="col-md-8">
            <textarea name="sendermessage" class="form-control" id="" cols="20" rows="10"></textarea>
          </div>
        </div>
        <div class="col-12 col-sm-6" style="margin-top: 10px; margin-left: 0px;">
          <input type="submit" value="SEND MESSAGE " class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
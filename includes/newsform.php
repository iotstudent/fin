<div class="col-md-4 third-foot">
    <h4 style="font-size: 20px; font-weight: 600; margin-bottom: -10px;">Newsletter</h4>
    <br>
    <p>Sign up today for hints, tips and the latest
      product news</p>
    <br>
    <form method="GET" action="processnewsletter.php">
    <?php
        $pagename= $_SERVER['SCRIPT_NAME'];
      ?>
      <div class="form-group">
        <div class="row newsletter">
          <div class="com-md-6">
            <input type="hidden" name="pagename" value="<?php echo $pagename;?>">
            <input type="email" class="form-control input-sm" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-secondary" style="color: #fff; background-color: #0080FE; border: none;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
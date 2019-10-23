<?php
   include_once("header.php");
 ?>

  <section class="signupform">
  <div class="signupform">
  <div class="container">
    <!-- main content -->
    <div class="row" >
      <div class="col-md-6 w3l_form" style="margin-top: 150px; margin-bottom: 120px;">
        <div class="left_grid_info">
          <h1>Don't Have an Account?</h1>
          <p style="color: #000">Kindly Contact us for more informatin on how to register your School into our system, please provide your Email, Name and phone number when sending your message for further confirmation.</p>
          <a href="news/contact.php?page=out"><button class="btn btn-danger"> Contact us</button></a>
        </div>
      </div>
      <div class="col-md-6 w3_info" style="margin-top: 150px; margin-bottom: 120px;">
        <h2>Login to your Account</h2>
        <p style="color: #000">Enter your details to login.</p>
        <?php echo user_message_fail_log(); ?>
        <form action="includes/login.inc.php" enctype="multipart/form-data" method="post">
          <label>Email</label>
          <div class="form-group">
          <div class="form-group-pretend">
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required> 
          </div>
        </div>
          <label>Password</label>
          <div class="form-group">
          <div class="form-group-pretend">
            <input type="Password" name="password" class="form-control" placeholder="Enter Password" required> 
          </div>
        </div> 
          <div class="login-check">
             <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i> Remember me</label>
          </div>
          <br>            
            <button class="btn btn-danger btn-block" type="submit" name="login"> <i class="fa fa-lock"> </i>  Login </button >                
        </form>
        <br><br>
        <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
      </div>
    </div>
    <!-- //main content -->
  </div>
</div>
</section>

   <?php 
     include_once("footer.php");
   ?>
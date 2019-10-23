<?php 
  include_once("header.php");
  confirm_logged_in();
?>

          <?php 
          $id_fetch = $_SESSION['user_id'];
          $sql = "SELECT * ";
          $sql .= "FROM user ";
          $sql .= "WHERE id = {$id_fetch}";
          $result = $connection->query($sql);

          if ($row = $result->fetch_assoc()) { 
            ?>


<section class="signupform">
  <div class="signupform">
  <div class="container">
    <!-- main content -->
    <div class="row" >
      <div class="col-md-6 w3l_form" style="margin-top: 150px; margin-bottom: 120px;">
        <div class="left_grid" id="gallery"  data-stellar-background-ratio="0.5">
          <form action="includes/register_user.inc.php" enctype="multipart/form-data" method="post">
        <div class="container">
            <div class="">
                <div class="col-md-6" style="margin-left: 60px; margin-top: 80px;">
                    <a href="">
                      <img src="../mari/includes/images/<?php echo $row['picture']; ?>"  class="img-fluid">
                      <input type="file" name="picture" id="filetoupload">
                    </a>
                </div> 
            </div>        
        </div>
    </div><?php echo message_user_edit_failx();
                echo message_user_editx();
     ?>
      </div>
      <div class="col-md-6 w3_info" style="margin-top: 150px; margin-bottom: 120px;">
        <h2 class="text-center">Update Profile</h2>
        <?php echo user_message_fail_log(); ?>
          <label>User Name</label>
          <div class="form-group">
          <div class="form-group-pretend">
            <input type="text" class="form-control" name="name" placeholder="username" value="<?php echo $row['name'] ?>" required> 
          </div>
        </div>
           <label>Email</label>
          <div class="form-group">
          <div class="form-group-pretend">
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo $row['email'] ?>" required> 
          </div>
        </div>
           <label>Phone Number</label>
          <div class="form-group">
          <div class="form-group-pretend">
            <input type="text" class="form-control" name="phone" placeholder="phone number" value="0<?php echo $row['phone'] ?>" required> 
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          </div>
        </div>
        <label>Gender</label>
          <div class="form-group">
          <div class="form-group-pretend">
            <select class="form-control" name="gender" value="<?php echo $row['gender'] ?>" required="">
              <option value="<?php echo $row['gender']; ?>">--leave previous--(<?php echo $row['gender']; ?>)</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select> 
          </div>
        </div>
        <p>Change Password<a href="Pfo/changepsw.php"><span>  Click Here</span></a></p>            
            <button class="btn btn-danger btn-block" type="submit" name="update">  Update </button >                
        </form>
      </div>
    </div>
    <!-- //main content -->
  </div>
</div>
</section>   
<?php } ?>
<?php 
  include_once("footer.php");
?>

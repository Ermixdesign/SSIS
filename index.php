<?php 
  include_once("header.php");
  $sql = "INSERT INTO test (bug) VALUES ('1');";
  mysqli_query($connection, $sql);
?>

    <div class="main-w3pvt mian-content-wthree text-center" id="home">
        <div class="container-fluid">
            <div class="style-banner mx-auto">
                <h3 class="text-wh font-weight-bold" style="margin-top: 50px;">Welcome to <span>SSIS</span> <br>Quality Schools for Your Children</h3>
                <div>
                <br>
                  <?php echo user_message_log();
                  echo view_fail(); ?>
              </div>
            </div>
        </div>
    </div>
    
    <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-3 probootstrap-animate">
              <h3>Top News</h3>
              <ul class="probootstrap-news">

                        <?php

                            $query = "SELECT * "; 
                            $query .= "FROM news ORDER BY time DESC";
                            $results = mysqli_query($connection, $query);
                            $news_counter = 2;
                            while($row = mysqli_fetch_assoc($results)) {
                              if ($news_counter > 3) {
                                break;
                              }else{
                        ?>


                <li>
                  <span class="probootstrap-date"><?php echo get_time_ago(strtotime($row['time'])); ?></span>
                  <h3><a href="news/nwspost.php?page=out&code=<?php echo $row['id']; ?>"><?php echo htmlentities($row['title']); ?></a></h3>
                  <p> <?php echo htmlentities($row['caller']); ?></p>
				  <div class="blog-meta">
					<span class="blog-meta-author">By: <a href="#"><?php echo htmlentities($row['author']); ?></a></span>
					<div class="pull-right">
					</div>
				 </div> 
                </li><hr>
                <?php $news_counter++;}} ?>


              </ul>
              <p><a href="news/news.php?page=out" class="btn btn-primary">View all news</a></p>
            </div>
            <div class="col-md-6 probootstrap-animate">
              <h3>About Us</h3>
              <p><img src="images/sch.jpg" class="img-responsive" style="height: 100%; width: 100%;"></p>
              <p>Secondary School Information System platform provides you with the best services where students and parents meet with schools that provide formal education and integrate their interests.</p>
              <p><a href="news/about.php?page=out" class="btn btn-primary">Read More</a></p>
            </div>
            <div class="col-md-3 probootstrap-animate">
              <h3>Gallery</h3>
              
              <div class="owl-carousel owl-carousel-fullwidth">
                <div class="item">
                  <a href="images/schools/7.jpg" class="image-popup">
                    <img src="images/schools/7.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="images/schools/tusiime.jpg" class="image-popup">
                    <img src="images/schools/tusiime.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="images/schools/18.jpg" class="image-popup">
                    <img src="images/schools/18.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="images/schools/6.jpg" class="image-popup">
                    <img src="images/schools/6.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="images/schools/17.jpg" class="image-popup">
                    <img src="images/schools/17.jpg" class="img-responsive">
                  </a>
                </div>
              </div>

              <p class="text-center"><a href="news/gallery.php?page=out" class="btn btn-primary">View all gallery</a></p>

            </div>
          </div>
        </div>
      </section>
           
         <!-- gallery -->
    <div class="gallery-cont text-center pb-5" id="gallery"  data-stellar-background-ratio="0.5">
        <div class="container">
            <h3 class="title-w3 mb-sm-5 mb-4 text-center text-bl font-weight-bold"> Best Schools In The Region </h3>
            <div class="row news-grids text-center no-gutters">


                        <?php

                            $query = "SELECT * "; 
                            $query .= "FROM school WHERE popular = 1 AND status = 1";
                            $results = mysqli_query($connection, $query);
                            $news_counter = 0;
                            while($row = mysqli_fetch_assoc($results)) {
                              if ($news_counter > 3) {
                                break;
                              }else{
                        ?>

                <div class="col-md-3 gal-img">
                    <a href="#gal<?php echo $row['id']; ?>"><img src="pfo/images/<?php echo $row['logo']; ?>"  class="img-fluid"></a>
                </div>
                <!-- gallery popups -->
            <!-- popup-->
            <div id="gal<?php echo $row['id']; ?>" class="pop-overlay animate">
                <div class="popup">
                    <img src="pfo/images/<?php echo $row['logo']; ?>" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4"></p>
                        <a class="btn btn-secondary" href="Pfo/schoolprof.php?page=out2&code=<?php echo $row['owner_id']; ?>"><button class="btn btn-secondary"> View School</button></a>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->

                <?php } }?>

            </div>
            <br>
            <br>
            <p class="text-center"><a href="news/school.php?page=out" class="btn btn-primary">View all Schools</a></p>
            
        </div>
    </div>

    <section>
        
    </section>

    

    <?php 
      include_once("footer.php");
    ?>
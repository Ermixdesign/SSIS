<?php 
require_once("includes/dbconnection.inc.php");
require_once("includes/error_functions.php");
require_once("includes/functions.php");
?>


<!DOCTYPE HTML>
<html lang="en">

<?php 
if (!isset($_GET['page'])) {  ////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////
                //the upcoming is header for main page//?>    


<head>
    <title>SSIS | WELCOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="ssis" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" type="text/css" href="css/error.css">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="css/cstyle.css">
    <link rel="stylesheet" type="text/css" href="css/funky.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
</head>

<?php 

} elseif ($_GET['page'] == "out2") { 
    ////////////the following is header for PFO
    ?>

    <head>
    <title>SSIS | WELCOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="ssis" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" type="text/css" href="../css/error.css">
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="css/prof.css">
    <link rel="stylesheet" type="text/css" href="../css/cstyle.css">
    <link rel="stylesheet" type="text/css" href="../css/sea.css">
    <link rel="stylesheet" type="text/css" href="../css/funky.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<?php ////////////////////////////////////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////
                //the upcoming is header for news page//
} elseif ($_GET['page'] == "out") { ?>

    <head>
    <title>SSIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="ssis" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
        <link rel="stylesheet" type="text/css" href="../css/error.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="../css/styles-merged.css">
        <link rel="stylesheet" type="text/css" href="../css/funky.css">
        <link rel="stylesheet" type="text/css" href="../css/cstyle.css">
        <link rel="stylesheet" type="text/css" href="../css/sea.css">
        <link type="text/css" rel="stylesheet" href="../css/stylx.css"/>
        <link rel="stylesheet" type="text/css" href="css/stylo.css">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    </head> <?php } ?>



<body>
    <header>
        <div class="container-fluid">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <div id="logo">
                    <h1><a href="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>index.php">
                        <img src="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>images/logo.png"></h1>
                </div>
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li ><a href="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>index.php">Home</a></li>
                            <li><a href="<?php if (!isset($_GET['page'])){echo "news/";}else{ echo dot($_GET['page']);} ?>news.php?page=out">News</a></li>
                            <li><a href="<?php if (!isset($_GET['page'])){echo "news/";}else{ echo dot($_GET['page']);} ?>school.php?page=out">Schools</a></li>
                            <li><a href="<?php if (!isset($_GET['page'])){echo "news/";}else{ echo dot($_GET['page']);} ?>about.php?page=out">About Us</a></li>
                            <li><a href="<?php if (!isset($_GET['page'])){echo "news/";}else{ echo dot($_GET['page']);} ?>contact.php?page=out">Contact</a></li>

                            <?php 
                            if (!isset($_SESSION['user_id'])) { ?>

                            <li><a href="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>login.php">Login</a></li>
                            <?php }else{ ?>
                            <li><a href="<?php if (!isset($_GET['page'])){echo "pfo/";}else{ echo prof_dot($_GET['page']);} ?>schoolprof.php?page=out2&code=<?php echo $_SESSION['user_id']; ?>">My school</a></li>
                            <li>
                                <div class="dropdown">
                                  <button class="dropbtn">
                                      <img src="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>images/user.png">
                                    Hi, <?php echo htmlentities($_SESSION['user_name']); ?>
                                  </button>
                                  <div class="dropdown-content">
                                    <a href="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>userprofile.php">my profile</a>
                                    <a href="<?php if (!isset($_GET['page'])){echo "";}else {echo home_dot($_GET['page']);} ?>includes/logout.inc.php" onclick="return confirm('You are about to logout <?php echo htmlentities($_SESSION['user_name']);?>?');">
                                        <i class="fa fa-sign-out"></i>
                                        logout
                                    </a>
                                  </div>
                                </div>
                            </li>
                            <li>
                                <button style="width: 70%; height: 70%; background-color: #fff; color: #fff; border-style: none;">b</button>
                            </li>

                            <?php $id_f = $_SESSION['user_id'];
                                  $sql = "SELECT * ";
                                  $sql .= "FROM school ";
                                  $sql .= "WHERE owner_id = {$id_f}";
                                  $result = $connection->query($sql);
                                    if ($row = $result->fetch_assoc()) {
                                    if ($row['status'] == 1) {?>
                            <li><button class="btn btn-success" style="background-color: #080;"><i class="fa fa-unlock"></i> Active</button></li>
                            <?php }else { ?>
                            <li><button class="btn btn-danger" style="background-color: #f00;"><i class="fa fa-lock"></i> Blocked</button></li>
                               <?php } }?>
                            

                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
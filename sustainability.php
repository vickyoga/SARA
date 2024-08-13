<?php 
Error_reporting(0);
require_once("admin/include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HWASEUNG</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!---FAVICON--->
<link href="img/favicon.png" rel="icon">
<!---BOOTSTRAP STYLE START--->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!---STYLE CSS START--->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!---D-MENU CSS START--->
<link rel="stylesheet" type="text/css" href="d-menu/css/menu.css">
<!---MEDIAQUERY CSS START--->
<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
<!---VERTICAL FULLPAGE SCROLL CSS START--->
<link rel="stylesheet" type="text/css" href="fullpage/css/fullpage.css">
<!---MOBILE MENU CSS START--->
<link rel='stylesheet' type="text/css" href='menu/slicknav.min.css'>
<link rel='stylesheet' type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<link rel="stylesheet" type="text/css" href="menu/style.css">
<!---FONT CSS START--->
<link rel="stylesheet" type="text/css" href="css/font.css">
<!---FONTAWESOME CSS START--->
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
<!---STYLE END--->
</head>
<body>
<div id="fullpage">
<div class="section" id="section0">
<!---HEADER START--->
<?php include 'header.php';?>
<!---HEADER END--->
<!---SUSTAINABILITY BANNER START--->
<div class="sustainability-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_sa_banner`, `sa_ban_img_path`, `sa_ban_title`, `sa_ban_cont`, `date_time`, `active_record` FROM `sa_banner` WHERE  active_record = '1' "  ;
          $execute_qry = mysqli_query($dbcon1,$query)or die("our_team Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
            $sa_ban_title = $team['sa_ban_title'];
            $sa_ban_cont = $team['sa_ban_cont'];
            $sa_ban_img_path = $team['sa_ban_img_path'];
            ?>
<div class="sustainability-content">
    <h3><?php print $sa_ban_title?></h3>
<!-- <h3>Sustainability</h3> -->
<div class="vertical-line">
    <h6><?php print $sa_ban_cont?></h6>
<!-- <h6>Hwaseung Enterprise will strive to become a sustainable group
through active social responsibility activities.</h6> -->
</div>
</div>
<?php 
          }
          ?>
</div>
</div>
</div>
</div>
<!---SUSTAINABILITY BANNER END--->
</div>

<!---SUSTAINABILITY SECTION START--->
<div class="section" id="section1">
<div class="sustainability-container">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_our_sa`, `our_sa_title`, `our_sa_cont`, `date_time`, `active_record` FROM `our_sa` WHERE  active_record = '1' "  ;
          $execute_qry = mysqli_query($dbcon1,$query)or die("our_team Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
            $our_sa_title = $team['our_sa_title'];
            $our_sa_cont = $team['our_sa_cont'];
           
            ?>
<div class="col-lg-12">
    <h3><?php print $our_sa_title?></h3>
    <p><?php print $our_sa_cont?></p>
<!-- <h3>Our Sustainability</h3>
<p>Being a sustainable business is about striking a perfect balance between shareholder expectations and the needs of our employees,
the workers in our supply chain and the world around us. We truly believe that acting as a responsible business – one which is fully
committed to respecting human rights – will contribute to lasting economic success.</p>
<p>We are continuously working towards becoming a more sustainable company. While we have been in this game for a long time, we
will never stop learning and improving our sustainability efforts.</p> -->
</div>
<?php
          }
          ?>
</div>
</div>
</div>
<!---SUSTAINABILITY SECTION END--->

<!---SUSTAINABILITY GOAL START--->
<div class="goal-container">
<div class="container reveal">
<div class="goal-item">
<h3>Our Goals</h3>
<div class="row">
<?php
          $query = "SELECT `id_sa_box`, `sa_box_img_path`, `sa_box_cont`, `date_time`, `active_record` FROM `sa_box` WHERE  active_record = '1' "  ;
          $execute_qry = mysqli_query($dbcon1,$query)or die("our_team Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
            $sa_box_img_path = $team['sa_box_img_path'];
            $sa_box_cont = $team['sa_box_cont'];
           
            ?>
<div class="col-lg-4">
<div class="goal-box1 goal-bg1">
 <div class="icon">
   <img src="admin/<?php print  $sa_box_img_path?>">  
   <!-- <img src="icons/Icons-01.png"> -->
   </div>
<div class="texting"><?php print $sa_box_cont?></div>
<!-- <div class="texting">Commits to 30% GHG<br>emissions reduction<br>by 2030 w/2019 baseline</div> -->
</div>
</div>
<?php
          }
          ?>

<!-- <div class="col-lg-4">
<div class="goal-box1 goal-bg2">
<div class="icon"><img src="icons/Icons-02.png"></div>
<div class="texting">Establish<br>a path<br>to Decarbonization</div>
<div class="texting"></div>
</div>
</div>
<div class="col-lg-4">
<div class="goal-box1 goal-bg3"">
<div class="icon"><img src="icons/Icons-03.png"></div>
<div class="texting">Promote<br>climate friendly<br>sustainable materials</div>
<div class="texting"></div>
</div>
</div>
<div class="col-lg-4">
<div class="goal-box1 goal-bg2">
<div class="icon"><img src="icons/Icons-04.png"></div>
<div class="texting">Eliminate<br>coal boilers<br>by 2023</div>
<div class="texting"></div>
</div>
</div>
<div class="col-lg-4 no-display">

</div>
<div class="col-lg-4">
<div class="goal-box1 goal-bg4">
<div class="icon"><img src="icons/Icons-08.png"></div>
<div class="texting">Coordinate roof top<br>sollar installation<br>on all manufacturing facilities</div>
<div class="texting"></div>
</div>
</div>
<div class="col-lg-4">
<div class="goal-box1 goal-bg3">
<div class="icon"><img src="icons/Icons-05.png"></div>
<div class="texting">Establish<br>Energy Efficiency Programs<br>in all manufacturing facilities</div>
<div class="texting"></div>
</div>
</div>
<div class="col-lg-4">
<div class="goal-box1 goal-bg4">
<div class="icon"><img src="icons/Icons-06.png"></div>
<div class="texting">Consider<br>RE100 Target<br>in Future for 2030</div>
<div class="texting"></div>
</div>
</div>
<div class="col-lg-4">
<div class="goal-box1 goal-bg5">
<div class="icon"><img src="icons/Icons-07.png"></div>
<div class="texting">Establish<br>a Sustainability Governance<br>Organization & Process</div>
<div class="texting"></div>
</div>
</div> -->
</div>
</div>
</div>
</div>
<!---SUSTAINABILITY GOAL END--->

<!---FOOTER START--->
<?php include 'footer.php';?>
<!---FOOTER END--->

</div>
</div>
<!---VERTICAL FULLPAGE SCROLL JS START--->
<script src="fullpage/js/fullpage.js"></script>
<script src="fullpage/js/scrolloverflow.min.js"></script>
<script src="fullpage/js/examples.js"></script>
<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        //anchors: ['firstPage', 'secondPage', '3rdPage'],
        scrollOverflow: true,
		responsiveWidth: 800,
    });
</script>
<!---D-MENU JS START--->
<script src="d-menu/js/jquery.min.js"></script>
<script src="d-menu/js/popper.js"></script>
<script src="d-menu/js/main.js"></script>
<!---MOBILE MENU JS START--->
<script src='menu/jquery.min.js'></script>
<script src='menu/jquery.slicknav.min.js'></script>
<script src="menu/script.js"></script>
<!---FONTAWESOME JS START--->
<script src="fontawesome/js/all.min.js"></script>
<!---COMMON JS START--->
<!--<script src="js/jquery.min.js"></script>-->
<!---BOOTSTRAP JS START--->
<script src="js/bootstrap.bundle.min.js"></script>
<!---ANIMATE JS START--->
<script src="js/animate.js"></script>
<!---ANIMATION JS END--->
<!---JS END--->
</body>
</html>

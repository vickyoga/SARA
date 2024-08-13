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
<!---BUSINESS VERTICALS BANNER START--->
<div class="business-verticals-banner">
<div class="container">
<div class="row">
    <?php
          $query = "SELECT `id_bus_verti_ban`, `ban_img_path`, `verti_ban_title`, `verti_ban_content`, `date_time`, `active_record` FROM `bus_verti_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $verti_ban_title = $team['verti_ban_title'];
          $verti_ban_content = $team['verti_ban_content'];
          
          }
        ?>
<div class="col-lg-12">
<div class="business-verticals-content">
<div class="label">Business Ventures</div>
<h3><?php print  $verti_ban_title?></h3>
<!-- <h3>Business<br>Divisions</h3> -->
<div class="vertical-lines">
    <h6><?php print  $verti_ban_content?></h6>
<!-- <h6>HWASEUNG consists of 24 separate entities in multiple countries
and continuing to expand its presence across the globe.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---BUSINESS VERTICALS BANNER END--->
</div>

<!---FOOTWEAR BANNER START--->
<div class="section" id="section1">
<div class="footwear-bg">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_verti_id`, `verti_ft_img_path`, `verti_ft_title`, `verti_ft_content`, `date_time`, `active_record` FROM `verti_ft_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $verti_ft_title = $team['verti_ft_title'];
          $verti_ft_content = $team['verti_ft_content'];
          
          }
        ?>
<div class="col-lg-6">
<div class="business-verticals-section">
<div class="title"><?php print  $verti_ft_title?></div>
<div class="horizontal-line"></div>
<p><?php print  $verti_ft_content?></p>
<!-- <p>Hwaseung Footwear division believes in delivering products with
flawless execution.<p> -->
<div class="business-verticals-button">
<a href="footwear.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">More Info</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---FOOTWEAR BANNER END--->


<!---APPAREL & ACCESSORIES BANNER START--->
<div class="section" id="section2">
<div class="apparel-bg">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_app_acc_banner`, `app_acc_ban_img_path`, `app_acc_ban_title`, `app_acc_ban_cont`, `date_time`, `active_record` FROM `app_acc_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $app_acc_ban_title = $team['app_acc_ban_title'];
          $app_acc_ban_cont = $team['app_acc_ban_cont'];
          
          }
        ?>
<div class="col-lg-6">
<div class="business-verticals-section">
<div class="title"><?php print  $app_acc_ban_title?></div>
<div class="horizontal-line"></div>
<p><?php print  $app_acc_ban_cont?></p>
<!-- <p>Hwaseung has always been about excellence in manufacturing
and sustainability.<p> -->
<div class="business-verticals-button">
<a href="apparel_accessories.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">More Info</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---APPAREL & ACCESSORIES  BANNER END--->


<!---MATERIALS BANNER START--->
<div class="section" id="section3">
<div class="materials-bg">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_mate_banner`, `mate_ban_img_path`, `mate_ban_title`, `mate_ban_cont`, `date_time`, `active_record` FROM `mate_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teams = mysqli_fetch_array($execute_qry)) {
          $mate_ban_title = $teams['mate_ban_title'];
          $mate_ban_cont = $teams['mate_ban_cont'];
    
          }
        ?>
<div class="col-lg-6">
<div class="business-verticals-section">
<div class="title"><?php print  $mate_ban_title?></div>
<div class="horizontal-line"></div>
<p><?php print  $mate_ban_cont?></p>
<!-- <p>Hwaseung triple thread strategy has given birth to our venture
into material manufacturing.<p> -->
<div class="business-verticals-button">
<a href="materials.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">More Info</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---MATERIALS  BANNER END--->

<!---SUPPLY CHAIN SOLUTION BANNER START--->
<div class="section" id="section4">
<div class="supply-bg">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_sply_banner`, `sply_ban_img_path`, `sply_ban_title`, `sply_ban_cont`, `date_time`, `active_record` FROM `supply_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teama = mysqli_fetch_array($execute_qry)) {
          $sply_ban_title = $teama['sply_ban_title'];
          $sply_ban_cont = $teama['sply_ban_cont'];
          
          }
        ?>
<div class="col-lg-6">
<div class="business-verticals-section">
<div class="title"><?php print  $sply_ban_title?></div>
<div class="horizontal-line"></div>
<p><?php print  $sply_ban_cont?></p>
<!-- <p>Hwaseung triple thread strategy has given birth to our venture
into material manufacturing.<p> -->
<div class="business-verticals-button">
<a href="supply_chain_solution.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">More Info</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!---SUPPLY CHAIN SOLUTION BANNER END--->


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
<!---JS END--->
</body>
</html>

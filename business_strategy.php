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
<!---BUSINESS STRATEGY BANNER START--->
<div class="business-strategy-banner">
<div class="container">
<div class="row">
<?php
          $query = "SELECT `id_str_banner`, `ban_img_path`, `ban_title`, `ban_content`, `date_time`, `active_record` FROM `bus_str_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ban_title = $team['ban_title'];
          $ban_content = $team['ban_content'];
          
          }
        ?>
<div class="col-lg-12">
<div class="business-strategy-content">
<div class="label">Business Ventures</div>
<h3><?php print  $ban_title?></h3>
<!-- <h3>Business<br>Strategy</h3> -->
<div class="vertical-line">
  <h6><?php print  $ban_content?></h6>
<!-- <h6>HWAESUNG consists of 24 seperate entities in multiple countries and continuing to expand its presence across the globe.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---BUSINESS STRATEGY BANNER END--->
</div>

<!---BUSINESS STRATEGY SECTION START--->
<div class="section" id="section1">
<div class="business-strategy-container">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_bus_str`, `str_title`, `str_content`, `str_img_path`, `date_time`, `active_record` FROM `bus_str` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $str_title = $team['str_title'];
          $str_content = $team['str_content'];
		  $str_img_path = $team['str_img_path'];
          
          }
        ?>
<div class="col-lg-12">
<div class="business-strategy-contents">
<!--<ul class="breadcrumb">
  <li><a href="#">HSE Business Ventures</a></li>
  <li><a href="#">Business Strategy</a></li>
</ul>-->
<h3><?php print  $str_title?></h3>
<h6><?php print  $str_content?></h6>
<!-- <h3>TRIPLE THREAT STRATEGY</h3> -->
<!-- <h6>Our Purpose is to move the world forward through the idea of being a creative platform for all.</h6> -->
<!-- <p>Our Triple threat strategy is our way forward to help our customers to be able to bring their ideas and dreams to turn them into reality in a sustainable and efficient way. -->
<!-- </p> -->
</div>
</div>
</div>
</div>
<div class="container reveal">
<div class="row">
<div class="col-lg-12">
<div class="business-strategy-text">
<img src="admin/<?php print  $str_img_path?>" alt="horizontal expansion" title="horizontal expansion">
</div>
</div>
</div>
</div>
</div>
<!---BUSINESS STRATEGY SECTION END--->

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

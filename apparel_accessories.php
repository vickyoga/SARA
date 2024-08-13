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
<!---APPAREL & ACCESSORIES BANNER START--->
<div class="apparel-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_app_acc_banner`, `app_acc_ban_img_path`, `app_acc_ban_title`, `app_acc_ban_cont`, `date_time`, `active_record` FROM `app_acc_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $app_acc_ban_title = $team['app_acc_ban_title'];
          $app_acc_ban_cont = $team['app_acc_ban_cont'];
          
          }
        ?>
<div class="apparel-content">
<div class="label">Business Divisions</div>
<h3><?php print  $app_acc_ban_title?></h3>
<!-- <h3>Apparel & Accessories</h3> -->
<div class="vertical-lines">
    <h6><?php print  $app_acc_ban_cont?></h6>
<!-- <h6>Hwaseung has always been about excellence in
manufacturing and sustainability. Hence our venture
into apperal business is a stepping stone to extend our
excellence into this sector.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---APPAREL & ACCESSORIES BANNER END--->
</div>

<!---APPAREL & ACCESSORIES CONTENT SECTION START--->
<div class="section" id="section1">
<div class="apparel-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-8">
<?php
          $query = "SELECT `id_app_access`, `app_access_title`, `app_access_cont`, `date_time`, `active_record` FROM `app_access` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $app_access_title = $team['app_access_title'];
          $app_access_cont = $team['app_access_cont'];
          
          }
        ?>
<div class="apparel-contents">
<ul class="breadcrumb">
  <li><a href="business_divisions.php">HSE Business Verticals</a></li>
  <li><a href="apparel_accessories.php">Apparel & Accessories</a></li>
</ul>
<h3><?php print  $app_access_title?></h3>
<p><?php print  $app_access_cont?></p>
<!-- <h3>Apparel & Accessories</h3>
<p>Hwaseung has always been about excellence in manufacturing and sustainability. 
Hence our venture into apparel business is a steppingstone to extend our excellence into this sector.
</p>
<p>Hwaseung Enterprise's apparel and accessories business was founded to venture into other fields with the same efficiency and speed of Hwaseung. 
Today, it has a major wing of Hwaseung which is growing rapidly and adding value to their respective customers with Hwaseung renowned efficiency and speed.
</p>
<p>Our goal is to enhance the process the appeal & accessories manufacturing through our cutting-edge R&D for development, engineering, and production.
</p>
<p>We at Hwaseung Apparel & Accessories welcome you to be a part of our commitment to innovation & sustainable growth.</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---APPAREL & ACCESSORIES CONTENT SECTION END--->

<div class="section" id="section2">
<!---APPAREL & ACCESSORIES SECTION 1  START--->
<?php
          $query = "SELECT `id_app_acc_list`, `app_list_img_path`, `app_list_title`, `app_list_subtitle`, `app_list_cont`, `date_time`, `active_record` FROM `app_acc_list` WHERE    `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!"); 
          $i=0;           
          while($team = mysqli_fetch_array($execute_qry)) {
            $i++;
          $app_list_title = $team['app_list_title'];
          $app_list_subtitle = $team['app_list_subtitle'];
          $app_list_img_path = $team['app_list_img_path'];
          $app_list_cont = $team['app_list_cont'];
          
          
        ?>
<div class="apparel-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
            
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="admin/<?php print  $app_list_img_path?>" alt="Unipax"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num"><?php print $i ?></div>
 				 <div class="title-section">
                                         <h4><?php print $app_list_title?></h4>
                                         <h6><?php print $app_list_subtitle?></h6>
                                         <p><?php print $app_list_cont?></p>
 				 <!-- <h4>Unipax</h4>
 				 <h6>UNIPAX Vi Thanh</h6> -->
 				 </div>
 				 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	</div>
  <?php
          }
          ?>
<!---APPAREL & ACCESSORIES SECTION 1 END--->

<!---APPAREL LEARN MORE BANNER START--->
<div class="apparel-learn-more-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="apparel-learn-more-content">
<h3>Learn More</h3>
<div class="apparel-learn-more-button">
<a href="footwear.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Footwear</span></div></div>
</a>
</div>
<div class="apparel-learn-more-button">
<a href="materials.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Materials</span></div></div>
</a>
</div>
<div class="apparel-learn-more-button">
<a href="supply_chain_solution.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Supply Chain Solution</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!---APPAREL LEARN MORE BANNER END--->

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

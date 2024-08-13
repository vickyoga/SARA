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
<!---MATERIALS BANNER START--->
<div class="materials-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_mate_banner`, `mate_ban_img_path`, `mate_ban_title`, `mate_ban_cont`, `date_time`, `active_record` FROM `mate_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teams = mysqli_fetch_array($execute_qry)) {
          $mate_ban_title = $teams['mate_ban_title'];
          $mate_ban_cont = $teams['mate_ban_cont'];
    
          }
        ?>
<div class="materials-content">
<div class="label">Business Divisions</div>
<h3><?php print  $mate_ban_title?></h3>
<!-- <h3>Materials</h3> -->
<div class="vertical-lines">
    <h6><?php print  $mate_ban_cont?> </h6>
<!-- <h6>Hwaseung triple thread strategy has given birth to our venture into material manufacturing.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---MATERIALS BANNER END--->
</div>

<!---MATERIALS CONTENT SECTION START--->
<div class="section" id="section1">
<div class="materials-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-8">
<div class="materials-contents">
<?php
          $query = "SELECT `id_mate`, `mate_title`, `mate_cont`, `date_time`, `active_record` FROM `mate` WHERE active_record=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $mate_title = $team['mate_title'];
          $mate_cont = $team['mate_cont'];
    
          }
        ?>
<ul class="breadcrumb">
  <li><a href="business_divisions.php">HSE Business Verticals</a></li>
  <li><a href="materials.php">Materials</a></li>
</ul>
<h3><?php print  $mate_title?></h3>
<p><?php print  $mate_cont?></p>
<!-- <h3>Materials</h3>
<p>HSE’s triple threat strategy has given birth to our venture into material manufacturing. 
We intend to bring our flawless execution and better consumer experience in material manufacturing.
</p>
<p>Hwaseung’s material business is an attempt to help brands to have an all-in-one creator platform which includes from material manufacturing. 
We intend to grow this business to create a sustainable and efficient eco-system for our customers so that they can bring their ideas to life.
</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---MATERIALS CONTENT SECTION END--->

<div class="section" id="section2">
<!---MATERIALS SECTION 1  START--->
<?php
          $query = "SELECT `id_mate_list`, `mate_list_img_path`, `mate_list_title`, `mate_list_subtitle`, `mate_list_cont`, `date_time`, `active_record` FROM `mate_list` WHERE  active_record=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!"); 
          $i=0;          
          while($team = mysqli_fetch_array($execute_qry)) {
            $i++;
          $mate_list_title = $team['mate_list_title'];
          $mate_list_subtitle = $team['mate_list_subtitle'];
          $mate_list_img_path = $team['mate_list_img_path'];
          $mate_list_cont = $team['mate_list_cont'];
    
          
        ?>
<div class="materials-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
            
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="admin/<?php print  $mate_list_img_path?>" alt="Dae Young"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
                               
 			
                                    <div class="num"><?php print $i ?></div>
 				 <div class="title-section">
                                         <h4><?php print  $mate_list_title?></h4>
                                         <h6><?php print  $mate_list_subtitle?></h6>
                                         <p><?php print  $mate_list_cont?></p>
 				 <!-- <h4>Dae Young</h4> -->
 				 <!-- <h6>Dae Young</h6> -->
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
<!---MATERIALS SECTION 1 END--->

<!---MATERIALS SECTION 2  START--->
<!-- <div class="materials-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="img/material-section2.jpg" alt="Phosphin"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">02</div>
 				 <div class="title-section">
 				 <h4>Phosphin</h4>
 				 <h6>Phosphin</h6>
 				 </div>
 				 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	</div> -->
<!---MATERIALS SECTION 2 END--->

<!---MATERIALS LEARN MORE BANNER START--->
<div class="materials-learn-more-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="materials-learn-more-content">
<h3>Learn More</h3>
<div class="materials-learn-more-button">
<a href="footwear.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Footwear</span></div></div>
</a>
</div>
<div class="apparel-learn-more-button">
<a href="apparel_accessories.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Apparel & Accessories</span></div></div>
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
<!---MATERIALS LEARN MORE BANNER END--->

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

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
<!---SUPPLY CHAIN SOLUTION BANNER START--->
<div class="supply-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="supply-content">
<?php
          $query = "SELECT `id_sply_banner`, `sply_ban_img_path`, `sply_ban_title`, `sply_ban_cont`, `date_time`, `active_record` FROM `supply_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teama = mysqli_fetch_array($execute_qry)) {
          $sply_ban_title = $teama['sply_ban_title'];
          $sply_ban_cont = $teama['sply_ban_cont'];
          
          }
        ?>
<div class="label">Business Divisions</div>
<h3><?php print  $sply_ban_title?></h3>
<!-- <h3>Supply Chain Solution</h3> -->
<div class="vertical-lines">
    <h6><?php print  $sply_ban_cont?></h6>
<!-- <h6>Hwaseung has believed in serving its customers with
all-in-one creator platform.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---SUPPLY CHAIN SOLUTION BANNER END--->
</div>

<!---SUPPLY CHAIN SOLUTION CONTENT SECTION START--->
<div class="section" id="section1">
<div class="supply-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-8">
<?php
          $query = "SELECT `id_supply`, `supply_title`, `supply_cont`, `date_time`, `active_record` FROM `supply` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $supply_title = $team['supply_title'];
          $supply_cont = $team['supply_cont'];
          
          }
        ?>
<div class="supply-contents">
<ul class="breadcrumb">
  <li><a href="business_divisions.php">HSE Business Verticals</a></li>
  <li><a href="supply_chain_solution.php">Supply Chain Solution</a></li>
</ul>
<h3><?php print  $supply_title?></h3>
<p><?php print  $supply_cont?></p>
<!-- <h3>Supply Chain Solution</h3>
<p>Hwaseung has believed in serving its customers with all-in-one creator platform. To support our manufacturing business Hwaseung has also
invested in business which support them.</p>
<p>Hwaseung intends to contribute to the growth of the world’s supply chain system by using it’s sustainable and eco-friendly methods to help
products reach consumers with best of quality.</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---SUPPLY CHAIN SOLUTION CONTENT SECTION END--->

<div class="section" id="section2">
<!---SUPPLY CHAIN SOLUTION SECTION 1  START--->
<?php
          $query = "SELECT `id_supply_list`, `sply_list_img_path`, `sply_list_title`, `sply_list_subtitle`, `suply_list_cont`, `date_time`, `active_record` FROM `supply_list` WHERE    `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!"); 
          $i=0;          
          while($team = mysqli_fetch_array($execute_qry)) {
            $i++;
          $sply_list_title = $team['sply_list_title'];
          $sply_list_subtitle = $team['sply_list_subtitle'];
          $sply_list_img_path = $team['sply_list_img_path'];
          $suply_list_cont = $team['suply_list_cont'];
          
          
        ?>
<div class="supply-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
           
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="admin/<?php print  $sply_list_img_path?>" alt="IBS Trading"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num"><?php print $i ?></div>
 			                        	 <div class="title-section">
                                         <h4><?php print $sply_list_title?></h4>
                                         <h6><?php print $sply_list_subtitle?></h6>
                                         <p><?php print $suply_list_cont?></p>
 				 <!-- <h4>IBS Trading</h4>
 				 <h6>International B2B Solutions Trading</h6> -->
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
<!---SUPPLY CHAIN SOLUTION SECTION 1 END--->

<!---SUPPLY CHAIN SOLUTION SECTION 2  START--->
<!-- <div class="supply-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="img/supply-section21.jpg" alt="Hwaseung Digital"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">02</div>
 				 <div class="title-section">
 				 <h4>HS Digital</h4>
 				 <h6>Hwaseung Digital</h6>
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
<!---SUPPLY CHAIN SOLUTION SECTION 2 END--->

<!---SUPPLY CHAIN SOLUTION SECTION 3  START--->
<!-- <div class="supply-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="img/supply-section3.jpg" alt="Hwaseung Global / Hwaseung Logistics"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">03</div>
 				 <div class="title-section">
 				 <h4>HS Global / HS Logistics</h4>
 				 <h6>Hwaseung Global / Hwaseung Logistics</h6>
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
<!---SUPPLY CHAIN SOLUTION SECTION 3 END--->

<!---SUPPLY CHAIN SOLUTION LEARN MORE BANNER START--->
<div class="supply-learn-more-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="supply-learn-more-content" data-aos="fade-up">
<h3>Learn More</h3>
<div class="supply-learn-more-button">
<a href="footwear.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Footwear</span></div></div>
</a>
</div>
<div class="supply-learn-more-button">
<a href="apparel_accessories.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Apparel & Accessories</span></div></div>
</a>
</div>
<div class="supply-learn-more-button">
<a href="materials.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Materials</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!---SUPPLY CHAIN SOLUTION LEARN MORE BANNER END--->

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

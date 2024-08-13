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
<!---FOOTWEAR BANNER START--->
<div class="footwear-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_verti_id`, `verti_ft_img_path`, `verti_ft_title`, `verti_ft_content`, `date_time`, `active_record` FROM `verti_ft_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $verti_ft_title = $team['verti_ft_title'];
          $verti_ft_content = $team['verti_ft_content'];
          
          }
        ?>
<div class="footwear-content">
<div class="label">Business Divisions</div>
<h3><?php print  $verti_ft_title?></h3>
<!-- <h3>Footwear</h3> -->
<div class="vertical-lines">
    <h6><?php print  $verti_ft_content?></h6>
<!-- <h6>HWASEUNG has a rich history and experience of footwear
manufacturing. Starting from the first factory in Korea to
present factories in Indonesia, China and Vietnam.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---FOOTWEAR BANNER END--->
</div>

<!---FOOTWEAR CONTENT SECTION START--->
<div class="section" id="section1">
<div class="footwear-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-6">
<?php
          $query = "SELECT `id_verti_ft`, `verti_ft_title`, `verti_ft_content`, `date_time`, `active_record` FROM `verti_ft` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $verti_title = $team['verti_ft_title'];
          $verti_content = $team['verti_ft_content'];
          
          }
        ?>
<div class="footwear-contents">
<ul class="breadcrumb">
  <li><a href="business_divisions.php">HSE Business Verticals</a></li>
  <li><a href="footwear.php">Footwear</a></li>
</ul>
  <h3><?php print  $verti_title?></h3>
  <p><?php print  $verti_content?></p>
<!-- <h3>Footwear</h3>
<p>Hwaseung Footwear division believes in delivering products with flawless execution. 
We are currently 60,000 strong and our belief of everyone is a creator is the driving force 
for us to provide our customers with products which are innovative, sustainable and of the highest quality.
</p>
<p>We would be achieving our goal to be world’s best creator platform by moving forward in the direction of inviting different perspectives, ideas, and innovative solutions to create a product which is exquisite and sustainable to our consumers.
</p>
<p>Our goal is to enhance the process the footwear manufacturing through our cutting-edge R&D for development, engineering, and production. We at Hwaseung Footwear welcome you to be a part of our commitment to innovation & sustainable growth.
</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---FOOTWEAR CONTENT SECTION END--->


<!---FOOTWEAR SECTION 1  START--->
<div class="section" id="section2">
<!-- <div class="footwear-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="admin/<?php print  $verti_ft_img_path?>" alt="Hwaesung Vina"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 	
                               
                                <div class="num">01</div>
 			 <div class="title-section">
 				 <h4>HS Vina</h4>
 				 <h6>Hwaesung Vina</h6>
 				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p>
 				 </div> admin			 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	</div> -->
<!---FOOTWEAR SECTION 1 END--->

<!---FOOTWEAR SECTION 2  START--->
<?php
$i=0;
          $query = "SELECT `id_verti_ft_list`, `verti_ft_img_path`, `verti_ft_list_title`, `verti_ft_list_subtitle`, `verti_ft_list_cont`, `date_time`, `active_record` FROM `verti_ft_list` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $verti_ft_list_title = $team['verti_ft_list_title'];
          $verti_ft_list_subtitle = $team['verti_ft_list_subtitle'];
          $verti_ft_img_path = $team['verti_ft_img_path'];
          $verti_ft_list_cont = $team['verti_ft_list_cont'];
          $i++;
          
        ?>
<div class="footwear-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="admin/<?php print  $verti_ft_img_path?>" alt="Hwaesung Indonesia"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">0<?php print  $i?></div>
 				 <div class="title-section">
                                     <h4><?php print  $verti_ft_list_title?></h4>
                                         <h6><?php print  $verti_ft_list_subtitle?></h6>
                                         <p><?php print  $verti_ft_list_cont?></p>
                                         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p> -->
 				 <!-- <h4>HS Indonesia</h4>
 				 <h6>Hwaesung Indonesia</h6>
 				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p> -->
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
<!---FOOTWEAR SECTION 2 END--->

<!---FOOTWEAR SECTION 3  START--->
<!-- <div class="footwear-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="img/footwear-section3.jpg" alt="Hwaesung China"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">03</div>
 				 <div class="title-section">
 				 <h4>HWD</h4>
 				 <h6>Hwaesung China</h6>
 				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p>
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
<!---FOOTWEAR SECTION 3 END--->

<!---FOOTWEAR SECTION 4  START--->
<!-- <div class="footwear-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="img/footwear-section41.jpg" alt="Hwaesung Polytech"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">04</div>
 				 <div class="title-section">
 				 <h4>HSP</h4>
 				 <h6>Hwaesung Polytech</h6>
 				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p>
 				 </div>
 a				 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	</div> -->
<!---FOOTWEAR SECTION 4 END--->

<!---FOOTWEAR SECTION 5  START--->
<!-- <div class="footwear-section-container">
<section class="dots-bg3 by-1">
        <div class="container-fluid pa-0">
            <div class="col-xs-12 px-0 z-1">
                <div class="container-fluid pa-0">
                    <a href="" class="block-link external-links">
                        <div class="featured-img dots-bg2 dots-mob"><img src="img/footwear-section5.jpg" alt="IBS Footwear"></div>
                          <div class="text-overlap">
                            <div class="col-xs-12 pa-0 align-center flex align-item">
                                <div class="col-md-10 col-xs-8 mob-col-xs-9 ps-2">
 			
                                    <div class="num">05</div>
 				 <div class="title-section">
 				 <h4>IBS Footwear</h4>
 				 <h6>International B2B Solution Footwear</h6>
 				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<p>
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
<!---FOOTWEAR SECTION 5 END--->

<!---LEARN MORE BANNER START--->
<div class="learn-more-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="learn-more-content">
<h3>Learn More</h3>
<div class="learn-more-button">
<a href="apparel_accessories.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Apparel & Accessories</span></div></div>
</a>
</div>
<div class="learn-more-button">
<a href="materials.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Materials</span></div></div>
</a>
</div>
<div class="learn-more-button">
<a href="supply_chain_solution.php" target="_parent">
<div class="more_btn2"><div class="top"><span class="more">Supply Chain Solution</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!---LEARN MORE BANNER END--->

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

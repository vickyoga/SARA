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
<!---BANNER START--->
<div class="banner-container">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
  <?php
          $querys = "SELECT count(`b_id`) as co  FROM `hu_banner` WHERE `active_record`=1"  ;
          $execute_qrys = mysqli_query($dbcon1,$querys) or die("featured_project Retriew Error!");          
          while($teams = mysqli_fetch_array($execute_qrys)) {
          $co = $teams['co'];
          }
        ?>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <?php 
for($i=1;$i<$co;$i++)
{
	echo'<button type="button" data-bs-target="#demo" data-bs-slide-to="'.$i.'"></button>';
}
          ?>
  </div>
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <?php
          $query = "SELECT `b_id`, `b_tittle`, `b_content`, `b_img_path`, `b_img_path_mob`, `date_time`, `active_record` FROM `hu_banner` WHERE `active_record`=1 Limit 1"  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $b_tittle = $team['b_tittle'];
          $b_content = $team['b_content'];
          $b_img_path = $team['b_img_path'];
          $b_img_path_mob = $team['b_img_path_mob'];
        ?>
    <div class="carousel-item active">
      <img src="admin/<?php print  $b_img_path?>" alt="banner1" class="d-block desktop-banner" style="width:100%;height:100vh;">
	  <img src="admin/<?php print  $b_img_path_mob?>" alt="banner1" class="mobile-banner" style="width:100%;height:100vh;">
	  <div class="carousel-caption">
        <h3><?php print  $b_tittle?></h3>
        <p><?php print  $b_content?></p>
      </div>
    </div>
    <?php
          }
          ?>
          <?php
          $query = "SELECT `b_id`, `b_tittle`, `b_content`, `b_img_path`, `b_img_path_mob`, `date_time`, `active_record` FROM `hu_banner` WHERE `active_record`=1 order by b_id limit 10 OFFSET 1"  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $b_tittle = $team['b_tittle'];
          $b_content = $team['b_content'];
          $b_img_path = $team['b_img_path'];
          $b_img_path_mob = $team['b_img_path_mob'];
        ?>
    <div class="carousel-item">
      <img src="admin/<?php print  $b_img_path?>" alt="banner2" class="d-block desktop-banner" style="width:100%;height:100vh;">
	  <img src="admin/<?php print  $b_img_path_mob?>" alt="banner1" class="mobile-banner" style="width:100%;height:100vh;">
	  <div class="carousel-caption">
        <h3><?php print  $b_tittle?></h3>
        <p><?php print  $b_content?></p>
      </div>
    </div>
    <?php
          }
          ?>
          <!-- 
    <div class="carousel-item">
      <img src="img/banner3.png" alt="banner3" class="d-block desktop-banner" style="width:100%;height:100vh;">
	  <img src="img/mb3.png" alt="banner1" class="mobile-banner" style="width:100%;height:100vh;">
	  <div class="carousel-caption">
        <h3>Industry<br> Disruption</h3>
        <p>Helping brands to make their product from best to great.</p>
      </div>
    </div> -->
  </div> 
</div> 
</div>
<!---BANNER END--->
</div>

<!---ABOUT US START--->
<div class="section" id="section1">
<div class="about-container">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_hu_hse`, `hu_hse_title`, `hu_hse_cont`, `hu_hse_vido_path`, `date_time`, `active_record` FROM `hu_ab_hse` WHERE `active_record`=1 ";
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $hu_hse_title = $team['hu_hse_title'];
          $hu_hse_cont = $team['hu_hse_cont'];
          $hu_hse_vido_path = $team['hu_hse_vido_path'];
          }
        ?>
<div class="col-lg-4">
<div class="about-content">
<h3><?php print  $hu_hse_title?></h3>
    <p><?php print  $hu_hse_cont?></p>
<!-- <h3>About Us</h3> -->
<!-- <p>Hwaseung Enterprise is a global enterprise,
headquartered in South Korea, comprising
24 companies across 4 Verticals. With an
aim to improve the quality of life of the
communities globally, by creating value
among our stakeholders and end customers
based on innovation &amp; technology.
Hwaseung Enterprise is the principal
investment holding company and promoter
of all Hwaseung companies making it worth
more than a billion dollar.</p> -->
<div class="about-more">
<a href="leadership_management.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">More Info</span></div></div>
</a>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="about-hwaseung-video">
<video
      controls
      loop
      autoplay
      muted="true"
      preload="metadata"
      src="admin/<?php print  $hu_hse_vido_path?>" 
      poster="img/aboutus-video-bg"
	  class="video_resolution"
></video>
</div>
</div>
</div>
</div>
</div>
</div>
<!---ABOUT US END--->


<!---BUSINESS VENTURES START--->
<div class="section" id="section2">
<div class="business-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="business-content">
<div class="row">
<div class="col-lg-3"><h3>Business <br>Ventures</h3></div>
<div class="col-lg-9 pt-2">
<div class="d-flex">
<a href="business_strategy.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">Strategy</span></div></div>
</a>
<div class="d-flex flex-column">
<div class="texting">
<p>Moving the world forward one idea at a time.</p>
</div>
</div>
</div>
<div class="d-flex">
<a href="business_divisions.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">Divisions</span></div></div>
</a>
<div class="d-flex flex-column">
<div class="texting">
<p>Expending our presence across the globe.</p>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<?php
          $query = "SELECT `id_verti_id`, `verti_ft_img_path`, `verti_ft_title`, `verti_ft_content`, `date_time`, `active_record` FROM `verti_ft_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $verti_ft_title = $team['verti_ft_title'];
          $verti_ft_content = $team['verti_ft_content'];
          $verti_ft_img_path = $team['verti_ft_img_path'];
          
          }
        ?>
<div class="col">
<div class="business-ventures-item">
<div class="business-ventures-items">
<img src="admin/<?php print  $verti_ft_img_path?>" alt="<?php print  $verti_ft_title?>" class="image">
  <div class="overlay">
    <a href="footwear.php"><div class="text">More Info</div></a>
  </div>
</div>
<div class="title"><?php print  $verti_ft_title?></div>
</div>
</div>

<div class="col">
<?php
          $query = "SELECT `id_app_acc_banner`, `app_acc_ban_img_path`, `app_acc_ban_title`, `app_acc_ban_cont`, `date_time`, `active_record` FROM `app_acc_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $app_acc_ban_title = $team['app_acc_ban_title'];
          $app_acc_ban_cont = $team['app_acc_ban_cont'];
          $app_acc_ban_img_path = $team['app_acc_ban_img_path'];
          
          }
        ?>
<div class="business-ventures-item">
<div class="business-ventures-items">
<img src="admin/<?php print  $app_acc_ban_img_path?>" alt="<?php print  $app_acc_ban_title?>" class="image">
  <div class="overlay">
    <a href="apparel_accessories.php"><div class="text">More Info</div></a>
  </div>
</div>
<div class="title"><?php print  $app_acc_ban_title?></div>
</div>
</div>

<div class="col">
<?php
          $query = "SELECT `id_mate_banner`, `mate_ban_img_path`, `mate_ban_title`, `mate_ban_cont`, `date_time`, `active_record` FROM `mate_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teams = mysqli_fetch_array($execute_qry)) {
          $mate_ban_title = $teams['mate_ban_title'];
          $mate_ban_cont = $teams['mate_ban_cont'];
          $mate_ban_img_path = $teams['mate_ban_img_path'];
    
          }
        ?>
<div class="business-ventures-item">
<div class="business-ventures-items">
<img src="admin/<?php print  $mate_ban_img_path?>" alt="<?php print  $mate_ban_title?>" class="image">
  <div class="overlay">
    <a href="materials.php"><div class="text">More Info</div></a>
  </div>
</div>
<div class="title"><?php print  $mate_ban_title?></div>
</div>
</div>

<div class="col">
<?php
          $query = "SELECT `id_sply_banner`, `sply_ban_img_path`, `sply_ban_title`, `sply_ban_cont`, `date_time`, `active_record` FROM `supply_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teama = mysqli_fetch_array($execute_qry)) {
          $sply_ban_title = $teama['sply_ban_title'];
          $sply_ban_cont = $teama['sply_ban_cont'];
          $sply_ban_img_path = $teama['sply_ban_img_path'];
          }
        ?>
<div class="business-ventures-item">
<div class="business-ventures-items">
<img src="admin/<?php print  $sply_ban_img_path?>" alt="<?php print  $sply_ban_title?>" class="image">
  <div class="overlay">
    <a href="supply_chain_solution.php"><div class="text">More Info</div></a>
  </div>
</div>
<div class="title"><?php print  $sply_ban_title?></div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---BUSINESS VENTURES END--->

<!---INVESTOR RELATIONS START--->
<div class="section" id="section3">
<div class="investor-container">
<div class="container reveal">
<div class="investor-content">
<div class="row">
<?php
          $query = "SELECT `id_investor`, `investor_title`, `investor_content`, `date_time`, `active_record` FROM `hu_investor_relations` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $investor_title = $team['investor_title'];
          $investor_content = $team['investor_content'];
         
        ?>
<div class="col-lg-12">

<h3><?php print  $investor_title?></h3>
<p><?php print  $investor_content?></p>
<!-- <p>Welcome to Hwaseung Enterprise’s Investor Relations. Here -->
<!-- you will find information on topics such as the company’s -->
<!-- financials, E-disclosure, and financial yearly report.</p> -->
</div>
</div>
<?php
          }
          ?>
</div>

<div class="investor-box-content">
<?php
          $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir_a` WHERE `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_img_path = $team['ir_img_path'];
          $ir_title = $team['ir_title'];
          $ir_content = $team['ir_content'];
          $pdf_path = $team['pdf_path'];
          }
        ?>
<div class="investor-box-item">
<div class="investor-box investor-bb">
<h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>Annual Report</h5>
<p>Kindly check out
annual reports
for the past year.</p> -->
<a href="admin/<?php print  $pdf_path?>"><div class="investor-button">Download</div></a>
</div>
</div>

<div class="investor-box-item">
<?php
          $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir_e` WHERE `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_img_path = $team['ir_img_path'];
          $ir_title = $team['ir_title'];
          $ir_content = $team['ir_content'];
          $pdf_path = $team['pdf_path'];
          }
        ?>
<div class="investor-box investor-box-bg">
<h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>E - Disclosure</h5>
<p>Kindly look into our
for the past year.</p> -->
<a href="admin/<?php print  $pdf_path?>"><div class="investor-button">Download</div></a>
</div>
<?php
          $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_img_path = $team['ir_img_path'];
          $ir_title = $team['ir_title'];
          $ir_content = $team['ir_content'];
          $pdf_path = $team['pdf_path'];
          }
        ?>
<div class="investor-box investor-br">
  <h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>Financials</h5>
<p>Kindly check out
financial reports
for the past year.</p> -->
<a href="admin/<?php print  $pdf_path?>"><div class="investor-button">Download</div></a>
</div>

</div>
</div>
</div>
</div>
</div>
<!---INVESTOR RELATIONS END--->

<!---SUSTAINABILITY START--->
<div class="section" id="section4">
<div class="sustain-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_sustain`, `sustain_title`, `sustain_content`, `date_time`, `active_record` FROM `hu_sustainability` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $sustain_title = $team['sustain_title'];
          $sustain_content = $team['sustain_content'];
         
        ?>
<div class="sustain-content">
  <h3><?php print  $sustain_title?></h3>
  <p><?php print  $sustain_content?></p>
<!-- <h3>Sustainability</h3> -->
<!-- <p>Welcome to Hwaseung Enterprise innovation and
sustainability page. Here you will find information on
topics such as the Hwaseung’s latest innovations, our
initiatives to save our environment, and safety
measure for our employees.</p> -->
<div class="sustain-button">
<a href="sustainability.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">More Info</span></div></div>
</a>
</div>
</div>
<?php
          }
          ?>


</div>
</div>
</div>
</div>
</div>
<!---SUSTAINABILITY END--->

<!---CAREER START--->
<div class="section" id="section5">
<div class="career-containers">
<div class="container reveal">
<div class="row">
<div class="col-lg-8">&nbsp;</div>
<div class="col-lg-4">
<?php
          $query = "SELECT `id_career`, `career_title`, `career_content`, `date_time`, `active_record` FROM `hu_careers` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $career_title = $team['career_title'];
          $career_content = $team['career_content'];
         
        ?>
<div class="career-contents">
  <h3><?php print  $career_title?></h3>
  <p><?php print  $career_content?></p>
<!-- <h3>Careers</h3>
<p>At Hwaseung we recognize the critical role that good talent plays in the success
and growth of each of any business. Here’s an invitation to change the world.
Come join our family which is driven by do-more, go-further attitude</p> -->
<?php
          }
          ?>

<div class="career-button">
<a href="careers.php" target="_parent">
<div class="more_btn"><div class="top"><span class="more">Join Us</span></div></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!---CAREER END--->


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
<script src="js/jquery.min.js"></script>
<!---BOOTSTRAP JS START--->
<script src="js/bootstrap.bundle.min.js"></script>
<!---ANIMATE JS START--->
<script src="js/animate.js"></script>
<!---JS END--->
</body>
</html>

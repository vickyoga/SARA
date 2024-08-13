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
<!---CONTACT BANNER START--->
<div class="contact-banner">
<div class="container">
<div class="row">
<?php
          $query = "SELECT `id_Cont_banner`, `Cont_ban_img_path`, `Cont_ban_title`, `Cont_ban_cont`, `date_time`, `active_record` FROM `cont_banner` WHERE  active_record = '1' "  ;
          $execute_qry = mysqli_query($dbcon1,$query)or die("our_team Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
            $career_ban_img_path = $team['Cont_ban_img_path'];
            $career_ban_title = $team['Cont_ban_title'];
            $career_ban_cont = $team['Cont_ban_cont'];
            ?>
<div class="col-lg-12">
<div class="contact-content">
    <h3><?php print $career_ban_title?></h3>
<!-- <h3>Contact</h3> -->
<div class="vertical-line">
    <h6><?php print $career_ban_cont?></h6>
<!-- <h6>Get the latest news and feature stories on our businesses,
community initiatives, heritage, and people. Scroll to read.</h6> -->
</div>
</div>
</div>
<?php
          }
          ?>
</div>
</div>
</div>
<!---CONTACT BANNER END--->
</div>

<!---CONTACT US START--->
<div class="section" id="section1">
<div class="contact-container">
<div class="contact-image">
<div class="container reveal">
<div class="row">
<?php
          $query = "SELECT `id_cont`, `cont_title`, `cont_sub_title`, `cont_addr`, `date_time`, `active_record` FROM `cont` WHERE   active_record = '1' "  ;
          $execute_qry = mysqli_query($dbcon1,$query)or die("our_team Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
           
            $cont_title = $team['cont_title'];
            $cont_sub_title = $team['cont_sub_title'];
            $cont_addr = $team['cont_addr'];
            ?>
<div class="contact-text">
    <h3><?php print $cont_title?></h3>
    <h5><?php print $cont_sub_title?></h5>
<!-- <h3>Contact Us</h3> -->
<!-- <h5>Reach Out to Us</h5> -->
<div class="address-box">
<div class="address-title pt-3">Address.</div>
<div class="address-info">
    <p><?php print $cont_addr?></p>
<!-- <p>8th floor, Dong lk Sung Bong Building,<br>
301 Seocho DaeRo, Seocho Gu, Seoul,<br>
Hwaseung Enterprise
</p> -->
</div>
<!-- <div class="address-title">Phone.</div>
<div class="address-info">
<h3>02-588-8043
</h3>
</div> -->
<!-- <div class="address-title pt-3">Fax.</div>
<div class="address-info">
<p>02-588-8045
</p>
</div> -->
<!-- <div class="address-title">Email.</div>
<div class="address-info">
<p>contactus@hsenterprise.com
</p>
</div> -->
</div>
<?php
          }
          ?>

</div>
</div>
</div>
</div>
</div>
<!---CONTACT US END--->


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

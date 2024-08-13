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
<a id="button"></a>
<!---INVESTOR BANNER START--->
<div class="investor-relations-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_ir_banner`, `ir_ban_img_path`, `ir_ban_title`, `ir_ban_cont`, `date_time`, `active_record` FROM `ir_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_ban_title = $team['ir_ban_title'];
          $ir_ban_cont = $team['ir_ban_cont'];
          $ir_ban_img_path = $team['ir_ban_img_path'];
        ?>
<div class="investor-relations-content">
<h3><?php print  $ir_ban_title?></h3>
        
<!-- <h3>Investor Relations</h3> -->
<div class="vertical-line">
<h6><?php print  $ir_ban_cont?></h6>
<!-- <h6>Welcome to Hwaseung Enterprise’s Investor Relations
Here you will find information on topics such as the company’s
financials, E-disclosure, and financial yearly report.</h6> -->
</div>
</div>
<?php
          }
          ?>
</div>
</div>
</div>
</div>
<!---INVESTOR BANNER END--->
</div>

<!---INVESTOR RELATIONS SECTION START--->
<div class="section" id="section1">
<?php
          $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir` WHERE `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_img_path = $team['ir_img_path'];
          $ir_title = $team['ir_title'];
          $ir_content = $team['ir_content'];
          $pdf_path = $team['pdf_path'];
        ?>
<div class="investor-relations-container">
<div class="investor-relations-item investor-box-desktop">
<div class="investor-relations-text">
    <h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>Financials</h5>
<p>Kindly check out financial reports for the past year.</p> -->
<div class="investor-relations-button">
<a href="admin/<?php print  $pdf_path?>"><div class="but">Download</div></a>
</div>
</div>
<div class="investor-relations-image">
<img src="admin/<?php print  $ir_img_path?>" alt="financial" title="financial">
<div class="title"><?php print  $ir_title?></div>
</div>
</div>

</section>

<div class="investor-relations-item investor-box-mobile">
<div class="investor-relations-image">
<img src="admin/<?php print  $ir_img_path?>" alt="financial" title="financial">
<div class="title"><?php print  $ir_title?></div>
</div>
<div class="investor-relations-text">
<h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<div class="investor-relations-button">

<a href="admin/<?php print  $pdf_path?>"><div class="but">Download</div></a>

<!-- <a href="admin/<?php print  $pdf_path?>"><div class="but">Download</div></a> -->
</div>
</div>
</div>
<?php
          }
          ?>



<?php
          $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir_a` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_img_path = $team['ir_img_path'];
          $ir_title = $team['ir_title'];
          $ir_content = $team['ir_content'];
          $pdf_path = $team['pdf_path'];
        ?>
        <div class="investor-relations-item">
<div class="investor-relations-image">
<img src="admin/<?php print  $ir_img_path?>" alt="financial" title="financial">
<div class="title"><?php print  $ir_title?></div>
<!-- <div class="title">Annual Reports</div> -->
</div>
<div class="investor-relations-text">
<h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>Annual Reports</h5>
<p>Kindly check out Annual report for the past one year.</p> -->
<div class="investor-relations-button">
<a href="admin/<?php print  $pdf_path?>"><div class="but">Download</div></a>
</div>
</div>
          </div>
<?php
          }
          ?>

<?php
          $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir_e` WHERE `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $ir_img_path = $team['ir_img_path'];
          $ir_title = $team['ir_title'];
          $ir_content = $team['ir_content'];
          $pdf_path = $team['pdf_path'];
        ?>
<div class="investor-relations-item investor-box-desktop">
<div class="investor-relations-text">
<h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>E-Disclosure</h5>
<p>Kindly look into our E-Disclosure for more information.</p> -->
<div class="investor-relations-button">
<a href="admin/<?php print  $pdf_path?>"><div class="but">Download</div></a>
</div>
</div>
<div class="investor-relations-image">
<img src="admin/<?php print  $ir_img_path?>" alt="financial" title="financial">
<div class="title"><?php print  $ir_title?></div>
<!-- <div class="title">E-Disclosure</div> -->
</div>
</div>
<div class="investor-relations-item investor-box-mobile">
<div class="investor-relations-image">
<img src="admin/<?php print  $ir_img_path?>" alt="financial" title="financial">
<div class="title"><?php print  $ir_title?></div>
<!-- <div class="title">E-Disclosure</div> -->
</div>
<div class="investor-relations-text">
<h5><?php print  $ir_title?></h5>
    <p><?php print  $ir_content?></p>
<!-- <h5>E-Disclosure</h5>
<p>Kindly look into our E-Disclosure for more information.</p> -->
<div class="investor-relations-button">
<a href="admin/<?php print  $pdf_path?>"><div class="but">Download</div></a>
</div>
</div>
</div>
<?php
          }
          ?>
</div>
<!---INVESTOR RELATIONS SECTION END--->


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

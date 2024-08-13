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
<!---PINTEREST CSS START--->
<link rel="stylesheet" type="text/css" href="css/pinterest.css">
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
<!---CAREER BANNER START--->
<div class="career-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_career_banner`, `career_ban_img_path`, `career_ban_title`, `career_ban_cont`, `date_time`, `active_record` FROM `career_banner` WHERE `active_record`=1 Limit 1"  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $career_ban_title = $team['career_ban_title'];
          $career_ban_cont = $team['career_ban_cont'];
		  }
        ?>
<div class="career-content">
	<h3><?php print  $career_ban_title?></h3>
<!-- <h3>Careers</h3> -->
<div class="vertical-lines">
	<h6><?php print  $career_ban_cont?></h6>
<!-- <h6>We expand the limits of human potential, include, and unite
people trying to create a more efficient and sustainable world.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---CAREER BANNER END--->
</div>

<!---OPENING SECTION START--->
<div class="section" id="section1">
<div class="career-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-12">
<h4>Open Positions</h4>
<p>We expand the limits of human potential, include and Unite people trying to create a more efficient and sustainable world.</p>
</div>
</div>
<div class="row">
<div class="col-lg-3">
<div class="opening-list">
<h6>Select Location</h6>
<ul>
<li><a href="#" target="_parent" class="active">All locations</a></li>
<li><a href="#" target="_parent">Vietnam</a></li>
<li><a href="#" target="_parent">Korea</a></li>
<li><a href="#" target="_parent">Singapore</a></li>
<li><a href="#" target="_parent">Malaysia</a></li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="opening-box">
<div class="opening-item">
<div class="opening-title"><a href="" data-bs-toggle="collapse" data-bs-target="#job1">Assistant Manager</a></div>
<div class="opening-number">03</div>
<div class="opening-button"><img src="img/big-arrow.png"></div>
<div id="job1" class="job_desc collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </div>
</div>
<div class="opening-item">
<div class="opening-title"><a href="" data-bs-toggle="collapse" data-bs-target="#job2">Section Chief</a></div>
<div class="opening-number">04</div>
<div class="opening-button"><img src="img/big-arrow.png"></div>
<div id="job2" class="job_desc collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </div>
</div>
<div class="opening-item">
<div class="opening-title"><a href="" data-bs-toggle="collapse" data-bs-target="#job3">Deputy Head of Department</a></div>
<div class="opening-number">01</div>
<div class="opening-button"><img src="img/big-arrow.png"></div>
<div id="job3" class="job_desc collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </div>
</div>
<div class="opening-item">
<div class="opening-title"><a href="" data-bs-toggle="collapse" data-bs-target="#job4">Head of Department</a></div>
<div class="opening-number">02</div>
<div class="opening-button"><img src="img/big-arrow.png"></div>
<div id="job4" class="job_desc collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </div>
</div>
<div class="opening-item">
<div class="opening-title"><a href="" data-bs-toggle="collapse" data-bs-target="#job5">Staff</a></div>
<div class="opening-number">06</div>
<div class="opening-button"><img src="img/big-arrow.png"></div>
<div id="job5" class="job_desc collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </div>
</div>
<div class="opening-item">
<div class="opening-title"><a href="" data-bs-toggle="collapse" data-bs-target="#job6">Chief Executive</a></div>
<div class="opening-number">05</div>
<div class="opening-button"><img src="img/big-arrow.png"></div>
<div id="job6" class="job_desc collapse">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---OPENING SECTION END--->

<!---LIFE AT HSE SECTION START--->
<div class="life-container">
<div class="life-image">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="life-text">
<h3>Life at HSE</h3>
<p>Our culture is shaped by our core belief ’Universal Creator platform.</p>
<p>We live a global culture, welcoming talents with entrepreneurial
minds from around the world. As true creators, we are aiming to be
agile and fast and to always have a fresh new perspective on things.
We believe success is created by a diverse workforce of individuals
with different ideas, strengths, interests and cultural backgrounds.
To attract and retain a diverse team, we place a premium on creating
and living an inclusive, respectful company culture.</p>
<p>This is an invitation to all creators out there to be a part of something creative and innovative. Hwaseung invites everyone to shape
a better vision for ourselves and the future.</p>
<p>Welcome to Hwaseung Enterprise.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!---LIFE AT HSE SECTION END--->

<!---OUR BENEFITS SECTION START--->
<div class="benefit-container">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="benefit-content">
<h4>Our Benefits</h4>
<img src="img/benefit-image.webp" alt="our benefits" title="our benefits">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="benefit-contents">
<h5>Learnings</h5>
<p>We are convinced that employee development enables a high-performance
culture. To achieve this, we offer employees a wide range of learning and
development opportunities. These include being a part of creative and
challengening projects which enhances their pesonal and professional
effectivenes.</p>
</div>
</div>
<div class="col-lg-6">
<div class="benefit-contents">
<h5>Rewards</h5>
<p>Important cornerstones of our rewards program are our Job Architecture and our
Global Salary Management System which are used as a basis for establishing and
evaluating the value of employees’ positions and salaries in a market-driven and
performance-oriented way</p>
<p>Global bonus program which provides an incentive influenced by corporate performance and individual performance.</p>
<p>Various Sport facilities in campus like Tennis, Batminton, Basketball and gym.</p>
</div>
</div>
</div>
</div>
</div>
<!---OUR BENEFITS SECTION END--->

<!---OUR MOMENTS SECTION START--->
<div class="moments-container">
<div class="container">
<div class="row"><div class="col-lg-12">
<h4>Our Moments</h4>
<div id="columns">
<?php
          $query = "SELECT `id_career_our`, `our_momt_img_path`, `date_time`, `active_record` FROM `career_ourmomt` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($team = mysqli_fetch_array($execute_qry)) {
          $our_momt_img_path = $team['our_momt_img_path'];
         
        ?>

  <figure>
  <img src="admin/<?php print  $our_momt_img_path?>">	
  </figure>
	
	<!-- <figure>
	<img src="img/pinterest/2.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/6.jpg">	
	</figure>
	
  <figure>
	<img src="img/pinterest/3.jpg">	
	</figure>
  
	<figure>
	<img src="img/pinterest/7.jpg">	
	</figure>
	
   <figure>
	<img src="img/pinterest/8.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/9.jpg">	
	</figure>
   <figure>
	<img src="img/pinterest/10.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/11.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/4.jpg">	
	</figure>
	<figure>
	<img src="img/pinterest/3.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/1.jpg">	
	</figure>
	 <figure>
	<img src="img/pinterest/7.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/9.jpg">	
	</figure>
	
	<figure>
	<img src="img/pinterest/8.jpg">	
	</figure>
	<figure>
	<img src="img/pinterest/6.jpg">	
	</figure> -->
	
<?php
		  }
		  ?>
		  </div>
</div>
</div>
</div>
</div>
<!---OUR MOMENTS SECTION END--->

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

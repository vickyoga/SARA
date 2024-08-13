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
<!---LEADERSHIP MANAGEMENT BANNER START--->
<div class="leadership-management-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_ab_led_banner`, `ban_img_path`, `ban_title`, `ban_content`, `date_time`, `active_record` FROM `ab_led_banner` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teama = mysqli_fetch_array($execute_qry)) {
          $ban_title = $teama['ban_title'];
          $ban_content = $teama['ban_content'];

          }
         
        ?>
<div class="leadership-management-content">
<div class="label">About Us</div>
<h3><?php print  $ban_title?></h3>

<!-- <h3>Leadership <br>& Management</h3> -->
<div class="vertical-lines">
    <h6><?php print  $ban_content?></h6>
<!-- <h6>Information and profiles of the CEO, Executive COO of
Hwaseung Enterprise.</h6> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!---LEADERSHIP MANAGEMENT BANNER END--->
</div>

<!---KYLEE CONTENT START--->
<div class="section" id="section1">
<div class="leadership-kylee-banner">
<div class="container reveal">
<div class="row">
<div class="col-lg-6">&nbsp;</div>
<div class="col-lg-6">
<?php
          $query = "SELECT `id_ab_led_kylee`, `kylee_content`, `date_time`, `active_record` FROM `ab_led_kylee` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teamb = mysqli_fetch_array($execute_qry)) {
          $kylee_content = $teamb['kylee_content'];
         
          }
         
        ?>
<div class="leadership-kylee-content">
    <h4>KY LEE</h4>
	<h6>CEO</H6>
    <p><?php print  $kylee_content?></p>
<!-- <h4>KY LEE</h4>
<h6>CEO</h6>
<p>KY Lee born in 1962. He did his BA in Kyung Sung University. He was appointment as
CEO of Hwaseung Enterprise in 2017. He has also been Vice President and CEO of
Hwaseung Vina between 2014-2016. Under his leadership, HSE became a Billion-dollar
company and was also listed in the Korean stock exchange. He has been honored with
The Order of Industrial Service Merit, the 52nd Trade Day</p> -->
</div>
</div>
<!--<div class="leadership-kylee-content" id="team1" data-aos="fade-up">
<h4>KY LEE</h4>
<h6>CEO</h6>
<p>KY Lee born in 1962. He did his BA in Kyung Sung University. He was appointment as
CEO of Hwaseung Enterprise in 2017. He has also been Vice President and CEO of
Hwaseung Vina between 2014-2016. Under his leadership, HSE became a Billion-dollar
company and was also listed in the Korean stock exchange. He has been honored with
The Order of Industrial Service Merit, the 52nd Trade Day.</p>
<div class="arrow-right">
<a onclick="switchVisible();"/>
<i class="fa-solid fa-chevron-right fa-3x"></i></a>
</div>
</div>-->
<!--<div class="leadership-kylee-content2" id="team2" data-aos="fade-up">
<p>We sincerely welcome you to the HWASEUNG Enterprise website.</p>
<p>HWASEUNG Enterprise Co., LTD is an industry leading Triple Threat Manufacturer
of Footwear, Apparel and Headwear – all three supported by internal Vertical
operations. Our headquarters is in Seoul, Korea guiding our 23 subsidiary
companies in 3 Countries of Origin (Vietnam, Indonesia and China). Our portfolio
of companies also features Hwaseung Digital, an IT company.</p>
<p>Our manufacturing strategy includes excellence in Supply Chain Optimization,
Digital Operations, Manufacturing Efficiency, Sustainability and Speed to Market.
These strategies along with performance of basic expectations – quality,
delivery, costing and social compliance – have fueled significant growth with our
major customer such as adidas, Nike, allbirds and Hoka One. Our projected
growth curve is steep, and we are well prepared for the challenge.</p>
<p>HWASEUNG Enterprise is the only footwear and headwear manufacturer to be a
signatory of the UNFCCC Global Climate Action Fashion Charter. As a member we
have committed to reduce our Green House Gas emissions 50% by 2030 (2020
baseline), eliminate coal from our facilities by 2025, utilize 100% renewable
energy by 2030 and achieve carbon neutrality by 2050. These are very ambitious
but necessary targets for a Global company with a concern for the planet.</p>
<p>Our pledge is, HWASEUNG Enterprise is a trusted company, with strong values
and a clear strategy constantly driving innovation for self-improvement and
shareholder value.</p>
<p>As always, thanks for your generous advice and support. Let’s always keep the
channels of communication open.</p>
<p class="name">- KY LEE, CEO of HSE -</p>
<div class="arrow-left">
<a onclick="switchVisible();"/>
<i class="fa-solid fa-chevron-left fa-3x"></i></a>
</div>
</div>-->
</div>
</div>
</div>
</div>
<!---KYLEE CONTENT END--->

<div class="section" id="section2">
<!---CEO MESSAGE START--->
<div class="ceo-message-container">
<div class="container reveal">
<div class="row">
<div class="col-lg-12">
<h3>CEO Message</h3>
<!--<div class="ceo-quote">
<i class="fa-solid fa-quote-left"></i>
<h4>We sincerely welcome you to the HWASEUNG Enterprise website.</h4>
<i class="fa-solid fa-quote-right"></i>
</div>-->
<p>We sincerely welcome you to the HWASEUNG Enterprise website.</p>
<p>HWASEUNG Enterprise Co., LTD is an industry leading Triple Threat Manufacturer of Footwear, Apparel and Headwear – all three
supported by internal Vertical operations. Our headquarters is in Seoul, Korea guiding our 23 subsidiary companies in 3 Countries of
Origin (Vietnam, Indonesia and China). Our portfolio of companies also features Hwaseung Digital, an IT company.</p>
<p>Our manufacturing strategy includes excellence in Supply Chain Optimization, Digital Operations, Manufacturing Efficiency, Sustainability
and Speed to Market. These strategies along with performance of basic expectations – quality, delivery, costing and social compliance –
have fueled significant growth with our major customer such as adidas, Nike, allbirds and Hoka One. Our projected growth curve is steep,
and we are well prepared for the challenge.</p>
<p>HWASEUNG Enterprise is the only footwear and headwear manufacturer to be a signatory of the UNFCCC Global Climate Action Fashion
Charter. As a member we have committed to reduce our Green House Gas emissions 50% by 2030 (2020 baseline), eliminate coal from our
facilities by 2025, utilize 100% renewable energy by 2030 and achieve carbon neutrality by 2050. These are very ambitious but necessary
targets for a Global company with a concern for the planet.</p>
<p>Our pledge is, HWASEUNG Enterprise is a trusted company, with strong values and a clear strategy constantly driving innovation for
self-improvement and shareholder value.</p>
<p>As always, thanks for your generous advice and support. Let’s always keep the channels of communication open.</p>
<p class="name">- KY LEE, CEO of HSE -</p>
</div>
</div>
</div>
</div>
<!---CEO MESSAGE END--->

<!---LEADERSHIP MANAGEMENT START--->
<div class="leadership-management-container">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h3>Leadership</h3>
</div>
</div>
</div>
</div>
<?php
          $query = "SELECT `id_leadership`, `leader_img_path`, `leader_name`, `leader_Designation`, `leader_content`, `date_time`, `active_record` FROM `ab_led_leadership` WHERE   `active_record`=1  "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teamac = mysqli_fetch_array($execute_qry)) {
          $leader_img_path = $teamac['leader_img_path'];
          $leader_name = $teamac['leader_name'];
          $leader_Designation = $teamac['leader_Designation'];
          $leader_content = $teamac['leader_content'];

          
         
        ?>
<div class="leadership-management-item">
<div class="leadership-management-contents">
<div class="leadership-management-image">
<img src="admin/<?php print  $leader_img_path?>" alt="leadership management" title="leadership management">
</div>
<div class="leadership-management-text no-border-bottom">
    <h4><?php print  $leader_name?></h4>
    <h6><?php print  $leader_Designation?></h6>
    <p><?php print  $leader_content?><p>
<!-- <h4>Hugh Hamill</h4>
<h6>Strategic Advisor</h6>
<p>Hugh Hamill holds a degree of Bachelor of Science from Pennsylvania State University. Hugh Hamill started his career with Hwaseung Enterprise in 2015. Before Hwaseung he was associated with major brands like Adidas and Reebok. His 28 years of working experience makes him to be counted as one of the best in the business. 
</p>
<p>He holds the position of Strategic Advisor in Hwaseung Enterprise. He has experience working in countries like USA, Korea, Indonesia, Hong Kong etc.  He also has love for athletics, where he has coached Pennsylvania athletics team.
</p>
<p>His skills in hard & soft goods design & development, profitability management, planning, manufacturing, and quality assurance has grown due to his immense global exposure.
</p> -->
</div>
</div>
<?php
}
?>
<!-- <div class="leadership-management-contents">
<div class="leadership-management-image">
<img src="img/leadership2.jpg" alt="leadership management" title="leadership management">
</div>
<div class="leadership-management-text no-border-bottom">
<h4>Mike Allicino</h4>
<h6>E. ECO (신발)</h6>
<p>Mike Allicino obtained his bachelor's degree in Business Administration from Miami University majoring in Marketing. </p>
<p>He holds the position of Executive COO at Hwaseung Enterprise.  Before joining Hwaseung he was associated with Adidas for over 19 years.
</p>
<p>With an industrial experience of over 20 years over diverse functionalities like sales & marketing, design, operations and sourcing and passion for footwear and sports motivates him to build Hwaseung into a global manufacturing giant.
</p>
</div>
</div>
<div class="leadership-management-contents">
<div class="leadership-management-image">
<img src="img/leadership3.jpg" alt="leadership management" title="leadership management">
</div>
<div class="leadership-management-text no-border-bottom">
<h4>Darren Hamilton</h4>
<h6>E. COO (Apparel & Accessory)</h6>
<p>Darren Hamilton did his bachelor’s in business administration from Simon Fraser University.  He holds the position of Executive COO at Hwaseung Enterprise (Apparel & Accessory).
</p>
<p>Darren Hamilton has a long experience in the apparel industry working in production quality and development for Nike. He has experience working in countries like USA, China, Netherlands, Canada etc. His 33 years of working experience makes him to be counted as one of the best in the apparel business.
</p>
</div>
</div>
<div class="leadership-management-contents">
<div class="leadership-management-image">
<img src="img/leadership4.jpg" alt="leadership management" title="leadership management">
</div>
<div class="leadership-management-text">
<h4>SD Lee</h4>
<h6>Vice President/ COO (Vertical)</h6>
<p>SD Lee did his Bachelors in Polymer Engineering from Busan National University in the year
1984. He holds the position of Vice President/COO (Vertical) at Hwaseung Enterprise
(Vertical Division). SD Lee has 35 years in footwear chemical and product manufacturing.</p>
<p>He is managing over 3000 employees under him across multiple companies and countries
across the world. He has experience working in countries like Korea, Vietnam, Indonesia etc.</p> -->
</div>
</div>
</div>
<!---LEADERSHIP MANAGEMENT END--->

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

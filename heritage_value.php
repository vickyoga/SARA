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

<!---HERITAGE VALUES BANNER START--->
<div class="heritage-value-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_ab_banner`, `ab_b_img_path`, `ab_b_title`, `ab_b_content`, `date_time`, `active_record` FROM `ab_banner` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teams = mysqli_fetch_array($execute_qry)) {
          $ab_b_title = $teams['ab_b_title'];
          $ab_b_content = $teams['ab_b_content'];
         
        ?>
<div class="heritage-value-content">
<div class="label">About Us</div>
<h3><?php print  $ab_b_title?></h3>
 
<!-- <h3>Heritage <br>& Values</h3> -->
<div class="vertical-lines">
<h6><?php print  $ab_b_content?></h6>
<!-- <h6>The ingenuity and vision of Hwaseung, and the way it inspired
the industry to move forward.</h6> -->
</div>
</div>
<?php
  }
?>
</div>

</div>
</div>
</div>
<!---HERITAGE VALUES BANNER END--->
</div>

<!---ABOUT HWASEUNG ENTERPRISE SECTION START--->
<div class="section" id="section1">
<div class="about-hwaseung-enterprise">
<div class="container reveal">
<div class="heritage-value-contents heritage-value-desktop">
<div class="row">
<div class="col-lg-6">
<?php
          $query = "SELECT `id_ab_hwa_ente`, `ab_hwa_ente_img_path`, `ab_hwa_ente_title`, `ab_hwa_ente_cont`, `date_time`, `active_record` FROM `ab_hwaseung_enterprise` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teamss = mysqli_fetch_array($execute_qry)) {
          $ab_hwa_ente_title = $teamss['ab_hwa_ente_title'];
          $ab_hwa_ente_cont = $teamss['ab_hwa_ente_cont'];
          $ab_hwa_ente_img_path = $teamss['ab_hwa_ente_img_path'];

          }
        ?>
<div class="heritage-value-left">

<h3><?php print  $ab_hwa_ente_title?></h3>
<!-- <h3>Hwaseung Enterprise</h3> -->
<h4></h4>
<div class="horizontal-line pt-5"></div>
<p class="pt-5"><?php print  $ab_hwa_ente_cont?></p>
<!-- <p class="pt-5">Hwaseung Enterprise is a global enterprise, headquartered in South Korea, comprising 24 companies across 4 Verticals. With an aim to improve the quality of life of the communities globally, by creating value among our stakeholders and end customers based on innovation & technology.  Hwaseung Enterprise is the principal investment holding company and promoter of all Hwaseung companies making it worth more than a billion dollar.
</p>
<p>Hwaseung Enterprise was listed in the Korean stock exchange in the year 2016 and hence been able to expand its business beyond just footwear into other fields like headwear, apparels, trading etc.
</p> -->
</div>

</div>
<div class="col-lg-6">
<div class="heritage-value-img">
<img src="admin/<?php print  $ab_hwa_ente_img_path?>" alt="hwaseung enterprises" title="hwaseung enterprises">
</div>
</div>
</div>
</div>
<div class="heritage-value-contents heritage-value-mobile">
<div class="row">
<div class="col-lg-6">
<img src="admin/<?php print  $ab_hwa_ente_img_path?>" alt="hwaseung enterprises" title="hwaseung enterprises">
</div>

<div class="col-lg-6">
<div class="heritage-value-left">
<h3><?php print  $ab_hwa_ente_title?></h3>
<!-- <h3>Hwaseung</h3>
<h4>Enterprise</h4> -->
<div class="horizontal-line pt-5"></div>
<p class="pt-5"><?php print  $ab_hwa_ente_cont?></p>
<!-- <p class="pt-5">Hwaseung Enterprise is a global enterprise, headquartered in South Korea, comprising 24 companies across 4 Verticals. With an aim to improve the quality of life of the communities globally, by creating value among our stakeholders and end customers based on innovation & technology.  Hwaseung Enterprise is the principal investment holding company and promoter of all Hwaseung companies making it worth more than a billion dollar.
</p>
<p>Hwaseung Enterprise was listed in the Korean stock exchange in the year 2016 and hence been able to expand its business beyond just footwear into other fields like headwear, apparels, trading etc.
</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---ABOUT HWASEUNG ENTERPRISE SECTION END--->



<!---ABOUT HS GROUP SECTION START--->
<div class="section" id="section2">
<div class="about-hs-group">
<div class="container reveal">
<div class="heritage-value-contents heritage-value-desktop">
<div class="row">
<div class="col-lg-6">
<?php
          $query = "SELECT `id_hs_group`, `hs_group_img_path`, `hs_group_title`, `hs_group_content`, `date_time`, `active_record` FROM `ab_hs_group` WHERE   `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teama = mysqli_fetch_array($execute_qry)) {
          $hs_group_title = $teama['hs_group_title'];
          $hs_group_content = $teama['hs_group_content'];
          $hs_group_img_path = $teama['hs_group_img_path'];

          }
        ?>
<div class="heritage-value-left">
<h3><?php print  $hs_group_title?></h3>
<!-- <h3>About HS Group</h3> -->
<div class="horizontal-line pt-5"></div>
<p class="pt-5"><?php print  $hs_group_content?></p>
<!-- <p class="pt-5">The history of Hwaseung Group started with Dongyang Rubber Industry, which had manufactured rubber shoes titled in '東' on Aug. 7, 1953. Since May of 1978 when Dongyang Chemical Industry, the matrix of Hwaseung R&A, Hwaseung established 6 affiliates and have group system in earnest for taking a powerful step toward. At this point of time, with Seung Hoon Hyun, chairman succeeding Soo Myeong Hyun, the late chairman, as the center, Hwaseung set up a system of diversified company and transferred its shoes production base to overseas factories. Using Indonesia and Thailand as production base, Hwaseung had gained a firm foothold for a successful overseas expansion.
</p>
<p>Since then, making consolidations of affiliates and intensive reconstruction of company, Hwaseung has elevated toward select and concentration management and, 7 years thereafter, Hwaseung was able to get a foothold for making a comeback. In 2005, declaring new CI and suggesting vision having keen eye while drawing its blueprint for the future, Hwaseung makes itself a promise to start a powerful soaring.
</p>
<p>Link to Hwaseung Group: <a href="http://www.hwaseunggroup.com/" target="_blank">http://www.hwaseunggroup.com/</a></p> -->
</div>
</div>
<div class="col-lg-6">
<div class="heritage-value-img">
<img src="admin/<?php print  $hs_group_img_path?>" alt="hs group" title="hs group">
</div>
</div>
</div>
</div>
<div class="heritage-value-contents heritage-value-mobile">
<div class="row">
<div class="col-lg-6">
<img src="admin/<?php print  $hs_group_img_path?>" alt="hs group" title="hs group">
</div>
<div class="col-lg-6">
<div class="heritage-value-left">
<h3><?php print  $hs_group_title?></h3>
<!-- <h3>About HS Group</h3> -->
<div class="horizontal-line pt-5"></div>
<p class="pt-5"><?php print  $hs_group_content?></p>
<!-- <p class="pt-5">The history of Hwaseung Group started with Dongyang Rubber Industry, which had manufactured rubber shoes titled in '東' on Aug. 7, 1953. Since May of 1978 when Dongyang Chemical Industry, the matrix of Hwaseung R&A, Hwaseung established 6 affiliates and have group system in earnest for taking a powerful step toward. At this point of time, with Seung Hoon Hyun, chairman succeeding Soo Myeong Hyun, the late chairman, as the center, Hwaseung set up a system of diversified company and transferred its shoes production base to overseas factories. Using Indonesia and Thailand as production base, Hwaseung had gained a firm foothold for a successful overseas expansion.
</p>
<p>Since then, making consolidations of affiliates and intensive reconstruction of company, Hwaseung has elevated toward select and concentration management and, 7 years thereafter, Hwaseung was able to get a foothold for making a comeback. In 2005, declaring new CI and suggesting vision having keen eye while drawing its blueprint for the future, Hwaseung makes itself a promise to start a powerful soaring.
</p>
<p>Link to Hwaseung Group: <a href="http://www.hwaseunggroup.com/" target="_blank">http://www.hwaseunggroup.com/</a></p> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---ABOUT HS GROUP SECTION END--->

<!---MISSION SECTION START--->
<div class="section" id="section3">
<div class="mission-container">
<div class="container reveal">
<div class="mission-content" onscroll="myFunction2()">
<div class="row">
<div class="col-md-6">
<?php
          $query = "SELECT `id_ab_mission`, `mission_img_path`, `mission_title`, `mission_content`, `date_time`, `active_record` FROM `ab_mission` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teamb = mysqli_fetch_array($execute_qry)) {
          $mission_title = $teamb['mission_title'];
          $mission_content = $teamb['mission_content'];
          $mission_img_path = $teamb['mission_img_path'];

          }
        ?>
<div id="team1">
<h4><?php print  $mission_title?></h4>
<p><?php print  $mission_content?></p>
<!-- <h4>Mission</h4>
<p>Hwaseung Enterprise has always been a values-driven
organization. These values continue to direct the growth and
business of Hwaseung companies.</p> -->
<div class="mission-image">
<img src="admin/<?php print  $mission_img_path?>" alt="heritage values" title="heritage values">
</div>
</div>
<?php
          $query = "SELECT `id_ab_attitude`, `attitude_img_path`, `date_time`, `active_record`, `ab_title`, `ab_cont` FROM `ab_attitude` WHERE  `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teamb = mysqli_fetch_array($execute_qry)) {
          $attitude_img_path = $teamb['attitude_img_path'];
          $ab_title = $teamb['ab_title'];
          $ab_cont = $teamb['ab_cont'];
         

          }
        ?>
<div id="team2" style="display:none;">
<h4><?php print  $ab_title?></h4>
<p><?php print  $ab_cont?></p>
<!-- <h4>Attitude</h4> -->
<!-- <p>&nbsp;</p> -->
<div class="mission-image">
<img src="admin/<?php print  $attitude_img_path?>" alt="attitude" title="attitude">
</div>
</div>
</div>
<div class="col-md-6">
<div class="mission-count">
<h5>Mission</h5>
<ul>
<li><a onclick="switchVisible();" class="active">1</a></li>
<li><a href="javascript:void(0)">|</a></li>
<li><a onclick="switchVisible();">2</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---MISSION SECTION END--->

<div class="section" id="section4">
<!---HERITAGE VALUES CONTENT START--->
<!---2020 START--->
<div class="container reveal">
<div class="heritage-section">
<h3>Heritage</h3>
<?php
          $querys = "SELECT `id_ab_heri`, `ab_heri_year`, `ab_heri_img_path`, `ab_heri_title`, `ab_heri_cont`, `date_time`, `active_record` FROM `ab_heri` WHERE  `active_record`= 1  group by `ab_heri_year` order by `ab_heri_year` desc"  ;
          $execute_qrys = mysqli_query($dbcon1,$querys) or die("featured_project Retriew Error!");          
          while($teamy = mysqli_fetch_array($execute_qrys)) {
          $ab_heri_year = $teamy['ab_heri_year'];
         
?>
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="row">
  <div class="col-lg-2">
    <div class="heritage-number">
    <?php print  $ab_heri_year?>
    </div>
  </div>
        <!-- The Modal Start-->
        <!-- <div class="modal" id="heri1">
          <div class="modal-dialog">
            <div class="modal-content"> -->
              <!-- Modal Header -->
              <!-- <div class="modal-header">
                <h4 class="modal-title">ADIDAS INOVATION CENTRE</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div> -->
              <!-- Modal body -->
              <!-- <div class="modal-body">
              <img src="img/heritage-image1.jpg" alt="heritage values" title="heritage values">
              </div> -->
              <!-- Modal footer -->
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- The Modal End-->
        <div class="col-lg-10">
        <?php
          $querya = "SELECT `id_ab_heri`, `ab_heri_year`, `ab_heri_img_path`, `ab_heri_title`, `ab_heri_cont`, `date_time`, `active_record` FROM `ab_heri` WHERE  `active_record`= 1 and ab_heri_year='".$ab_heri_year."' order by `ab_heri_year` desc"  ;
          $execute_qrya = mysqli_query($dbcon1,$querya) or die("featured_project Retriew Error!");          
          $i=0;
          while($teamd = mysqli_fetch_array($execute_qrya)) {
          $ab_heri_title = $teamd['ab_heri_title'];
          $ab_heri_img_path = $teamd['ab_heri_img_path'];
          $ab_heri_cont = $teamd['ab_heri_cont'];

         $i++;
      ?>
      
      <div class="heritage-items">
      <div class="row">
        <?php
        if($i>1){
          ?>
          <div class="col-lg-6  heritage-box-desktop" >
            <?php
        }
        else{
        ?>
        <div class="col-lg-6" >
        <?php
        }
        ?>
        <div class="heritage-image">
        <a href="#" data-bs-toggle="modal" data-bs-target="#heri1">
        <img src="admin/<?php print  $ab_heri_img_path?>" alt="heritage values" title="heritage values">
        </a>
        </div>
        </div>
        <?php
        if($i>1){
          ?>
          <div class="col-lg-6  heritage-box-desktop" >
            <?php
        }
        else{
        ?>
        <div class="col-lg-6" >
        <?php
        }
        ?>
        <div class="heritage-text"  data-aos="fade-up">
        <h4><?php print  $ab_heri_title?></h4>
        <p><?php print  $ab_heri_cont?></p>
        </div>
        </div>
        <?php
        if($i>1){
          ?>
        <div class="col-lg-6 heritage-box-mobile">
        <div class="heritage-image" data-aos="fade-up">
        <img src="admin/<?php print  $ab_heri_img_path?>" alt="heritage values" title="heritage values">
        </div>
        </div>
        <div class="col-lg-6 heritage-box-mobile">
        <div class="heritage-text" data-aos="fade-up">
        <h4><?php print  $ab_heri_title?></h4>
        <p><?php print  $ab_heri_cont?></p>
        </div>
        </div>
        <?php
        }
        ?>
      </div>
      </div>
      
      <?php
        }
      ?>
      </div>
    </div>
    </div>
    </div>
    <?php
      }
    ?>
  </div>
  </div>
<!---2020 END--->



<!---LEADERSHIP MANAGEMENT START--->
<div class="leadership-bg">
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php
          $query = "SELECT `id_ab_led_banner`, `ban_img_path`, `ban_title`, `ban_content`, `date_time`, `active_record` FROM `ab_led_banner` WHERE `active_record`=1 "  ;
          $execute_qry = mysqli_query($dbcon1,$query) or die("featured_project Retriew Error!");          
          while($teamc = mysqli_fetch_array($execute_qry)) {
          $ban_title = $teamc['ban_title'];
          $ban_content = $teamc['ban_content'];
          
        ?>
<div class="leadership-bg-content">
  <h3><?php print $ban_title?></h3>
  <h6><?php print $ban_content?></h6>
<!-- <h3>Leadership & Management</h3>
<h6>The ingenuity and vision of Hwaseung, and the way it inspired
the industry to move forward.</h6> -->
<div class="leadership-management-button">
<a href="leadership_management.php" target="_parent">
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
<!---LEADERSHIP MANAGEMENT END--->


<!---FOOTER START--->
<?php include 'footer.php';?>
<!---FOOTER END--->

</div>

<script>
function switchVisible() {
            if (document.getElementById('team1')) {

                if (document.getElementById('team1').style.display == 'none') {
                    document.getElementById('team1').style.display = 'block';
                    document.getElementById('team2').style.display = 'none';
                }
                else {
                    document.getElementById('team1').style.display = 'none';
                    document.getElementById('team2').style.display = 'block';
                }
            }
}
</script>
<script>
function myFunction2() {
      alert("hi"); exit; 
  if (document.getElementById('team1').style.display == 'none') {
                    document.getElementById('team1').style.display = 'block';
                    document.getElementById('team2').style.display = 'none';
                }
}
</script>
<script>
var element = document.getElementsByClassName("mission-count")[0];
element.addEventListener("click", myFunction);
function myFunction(e) {
		var elems = document.querySelector(".active");
    if(elems !=null) {
      elems.classList.remove("active");
    }
    e.target.className = "active";
	}
</script>
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

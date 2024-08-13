<?php
include("include/login_action.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sell My Car for Cash Today | TradeCars</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="TradeCars is the best website to sell used cars for cash today or the same day. 100% Verified Car buyers and dealers are registered to buy your cars at best price.">
<meta name="keywords" content="sell my car for cash today, sell my car for cash today near me, best site to sell used car, sell used car online, sell used car, sell my used car">
<meta name="author" content="">
<!---BOOTSTRAP STYLE START--->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!---STYLE START--->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<!---FORM CSS START--->
<link rel="stylesheet" type="text/css" href="../css/form.css">
<!---MEDIAQUERY START--->
<link rel="stylesheet" type="text/css" href="../css/mediaquery.css">
<!---FONTAWESOME STYLE START--->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
<!---STYLE END--->
<!---COMMON JS START--->
<script src="../js/jquery.min.js"></script>
<!---COMMON JS END--->
</head>
<body>
<!---HEADER START--->
<div class="nav-fixed-header">
<nav class="navbar navbar-expand-sm menu-bg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index.php"><div class="logo"><img src="../img/logo.jpg" class="img-fluid"></div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
	  <li class="nav-item">
	  <li class="nav-item">
          <a class="nav-link text-dark" href="sell-my-car-for-cash-today.php">SELL MY CAR</a>
		   </li>
          <a class="nav-link text-dark" href="best-site-to-buy-used-cars.php">USED CARS</a>
		   </li>	   
		   <li class="nav-item">
          <a class="nav-link text-dark" href="buy-here-pay-here-car-dealerships.php">CAR DEALERS</a>
		   </li>
		   <li class="nav-item">
          <a class="nav-link text-dark" href="vehicle-history-report.php">CAR HISTORY REPORTS</a>
		   </li>
	      <li class="nav-item">
          <a class="nav-link text-dark" href="#"><i class="fa-solid fa-phone"></i> +1 (888) 594-2334</a>
		   </li>
          <li class="nav-item">
          <a class="nav-link text-dark" href="#"><i class="fab fa-facebook-f"></i></a>
		   </li> 
		   <li class="nav-item">
		  <a class="nav-link text-dark" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </li>
		<li class="nav-item">
		  <a class="nav-link text-dark" href="#"><i class="fab fa-instagram"></i></a>
		   </li> 
		<li class="nav-item">
		  <a class="nav-link text-dark" href="#"><i class="fab fa-twitter"></i></a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</div>
<!---HEADER END--->

<!---SIGNUP START--->
<div class="signup-container">
<h1>Sell your used car for <span class="text-success">car</span> the best price at <span class="text-success">tradecars</span></h1>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="signup-form-bg">
<div class="title">Login</div>
<div class="signup-form-item">
<div class="row">
<div class="col-md-6">
<div class="signup-form-image">
<img src="../img/signin.png">
</div>
</div>
<div class="col-md-6">
<div class="signup-form-content">
<h2>Sign In to Tradecars</h2>
<h4>Don't have an account yet? &nbsp;<a href="signup.php"><span class="text-success"><strong>Create an Account</strong></span></a></h4>
<form  name="ulogin" method="post" class="form-login" autocomplete="off" action="include/login_action.php">
<div class="row">
<?php 
if(!empty($_REQUEST['ses_exp'])) { echo "<p style='color:#ff0000'> Your session has been expired! </p>"; }
?>
<div class="row">
<div class="form-line col-md-12">
      <label for="first name">Email</label>
      <input type="text" class="form-control" id="name" placeholder="" name="user_name">
    </div>
	 <div class="form-line col-md-12">
      <label for="email">Password</label>
      <input type="password" class="form-control" id="email" placeholder="" name="user_pass">
    </div>
	<?php
	if(!empty($_REQUEST['log_err'])) { echo "<p style='color:#ff0000'> Invalid user name and password </p>"; }
	?>
	<div class="row">
	<div class="col-md-4">
	<button class="btn btn-primary btn-lg btn-block" name="user_login" type="submit">SIGN IN</button>
	<!-- <a href=""><div class="button">Sign In</div></a> -->
	</div>
	<div class="col-md-4">
	&nbsp;
	</div>
	<div class="col-md-4 pt-5">
	<a href="forgot-password.php"><span class="text-success"><strong>Forgot Password?</strong></span></a>
	</div>
	</div>
	</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!---SIGNUP END--->

<!---FOOTER START--->
<?php include 'footer.php';?>
<!---FOOTER END--->

<!---FORM JS START--->
<script  src="../js/form.js"></script>
<!---FONTAWESOME JS START--->
<script src="../icons/js/all.min.js"></script>
<!---BOOTSTRAP JS START--->
<script src="../js/bootstrap.bundle.min.js"></script>
<!---JS END--->
</body>
</html>

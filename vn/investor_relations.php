<!DOCTYPE html>
<html lang="en">
<head>
<title>HWASEUNG</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!---FAVICON--->
<link href="../img/favicon.png" rel="icon">
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
<div class="investor-relations-content">
<h3>Quan Hệ Nhà Đầu Tư</h3>
<div class="vertical-line">
<h6>Chào mừng đến với trang Quan Hệ Nhà Đầu Tư của Hwaseung Enterprise. Bạn sẽ tìm thấy thông tin về tài chính của công ty, thông cáo điện tử và báo cáo tài chính thường niên.</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<!---INVESTOR BANNER END--->
</div>

<!---INVESTOR RELATIONS SECTION START--->
<div class="section" id="section1">
<div class="investor-relations-container">
<div class="investor-relations-item investor-box-desktop">
<div class="investor-relations-text">
<h5>Tài Chính</h5>
<p>Vui lòng xem qua báo cáo tài chính.</p>
<div class="investor-relations-button">
<a href="#"><div class="but">Tải Về</div></a>
</div>
</div>
<div class="investor-relations-image">
<img src="../img/investor-image2.webp" alt="financial" title="financial">
<div class="title">Tài Chính</div>
</div>
</div>
</section>
<div class="investor-relations-item investor-box-mobile">
<div class="investor-relations-image">
<img src="../img/investor-image2.webp" alt="financial" title="financial">
<div class="title">Tài Chính</div>
</div>
<div class="investor-relations-text">
<h5>Tài Chính</h5>
<p>Vui lòng xem qua báo cáo tài chính.</p>
<div class="investor-relations-button">
<a href="#"><div class="but">Tải Về</div></a>
</div>
</div>
</div>
<div class="investor-relations-item">
<div class="investor-relations-image">
<img src="../img/investor-image1.webp" alt="financial" title="financial">
<div class="title">Báo Cáo Thường Niên</div>
</div>
<div class="investor-relations-text">
<h5>Báo Cáo Thường Niên</h5>
<p>Vui lòng kiểm tra báo cáo thường niên trong một năm qua.</p>
<div class="investor-relations-button">
<a href="#"><div class="but">Tải Về</div></a>
</div>
</div>
</div>
<div class="investor-relations-item investor-box-desktop">
<div class="investor-relations-text">
<h5>Thông Cáo Điện Tử</h5>
<p>Vui lòng xem thông cáo điện tử của chúng tôi để biết thêm thông tin.</p>
<div class="investor-relations-button">
<a href="#"><div class="but">Tải Về</div></a>
</div>
</div>
<div class="investor-relations-image">
<img src="../img/investor-image.webp" alt="financial" title="financial">
<div class="title">Thông Cáo Điện Tử</div>
</div>
</div>
<div class="investor-relations-item investor-box-mobile">
<div class="investor-relations-image">
<img src="../img/investor-image.webp" alt="financial" title="financial">
<div class="title">Thông Cáo Điện Tử</div>
</div>
<div class="investor-relations-text">
<h5>Thông Cáo Điện Tử</h5>
<p>Vui lòng xem thông cáo điện tử của chúng tôi để biết thêm thông tin.</p>
<div class="investor-relations-button">
<a href="#"><div class="but">Tải Về</div></a>
</div>
</div>
</div>
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
<!---JS END--->
</body>
</html>

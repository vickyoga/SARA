<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy here Pay here Used Car Dealerships | TradeCars</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="TradeCars helps that buys here pay here car dealerships near your location by the city. No more delay to reach the dealerships that buy used cars.">
<meta name="keywords" content="buy here pay here car dealerships, used car dealerships, dealerships that buy cars, dealerships that buy used cars, sell used car to dealer">
<meta name="author" content="">
<!---BOOTSTRAP STYLE START--->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!---STYLE START--->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!---MEDIAQUERY START--->
<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
<!---FONTAWESOME STYLE START--->
<link rel="stylesheet" type="text/css" href="icons/css/all.css">
<!---STYLE END--->
</head>
<body>
<!---HEADER START--->
<?php include 'header.php';?>
<!---HEADER END--->

<!---DEALER LISTING START--->
<div class="container">
<div class="dealer-search">
<div class="row">
<div class="col-lg-9"><h4>All Dealers Nationwide <i class="fa-solid fa-location-dot"></i></h4></div>
<div class="col-lg-3">
<form>
   <select class="form-select">
     <option>Relevance</option>
     <option>Distance-Closest</option>
     <option>Distance-Farthest</option>
     <option>Dealership Name A-Z</option>
	 <option>Dealership Name Z-A</option>
   </select>
</form>
</div>
</div>
</div>
<div class="dealer-container">
<div class="row">
<div class="col-lg-3">
<div class="dealer-filter">
<div class="dealer-filter-item">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Location
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
		<div class="col-md-6">
		<div class="form-group">
      <label for="sel1">Distance</label>
      <select class="form-control" id="sel1">
	   <option></option>
        <option>1000km</option>
        <option>21000km</option>
        <option>31000km</option>
        <option>41000km</option>
      </select>
		</div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
  <label for="usr">ZIP Code</label>
  <input type="text" class="form-control" id="usr">
</div>
		</div>
		</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Make
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Maruti</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">KIA</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Tata</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Toyota</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Mahindra</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Audi</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">BMW</label>
    </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Condition
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Used</label>
    </div>
	<div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Certified</label>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="dealer-filter-item">
<div class="title">New Car Price Quote</div>
<div class="dealer-filter-items">
<form>
   <select class="form-select">
     <option>Make</option>
     <option>Audi</option>
     <option>BMW</option>
     <option>Maruti</option>
	 <option>Tata</option>
	 <option>Toyota</option>
	 <option>Mahindra</option>
	 <option>KIA</option>
   </select>
</form>
<form>
   <select class="form-select mt-3" disabled>
     <option>Model</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
   </select>
</form>
<form>
   <select class="form-select mt-3" disabled>
     <option>Style/Trim</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
   </select>
</form>
<div class="form-group mt-3 mb-3">
 <input type="text" class="form-control" placeholder="ZIP">
</div>
   <center><button type="button" class="btn btn-primary">FIND DEALER</button></center>

</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="dealer-item-container">
<div class="results">1-25 of 1,000+ Results</div>
<div class="dealer-item">
<div class="row">
<div class="col-lg-6">
<div class="dealer-details">
<a href="dealer-profile.php"><h4><i class="fa-solid fa-car"></i> Car Trading Chennai</h4></a>
<small>(33km away)</small>
<address>
<i class="fa-solid fa-location-dot"></i> New No 114, 86, Dr Radhakrishnan Salai, Near Yellow Pages, Mylapore, Mylapore, Chennai, Tamil Nadu 600004
</address>
<p><i class="fa-solid fa-phone"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-mobile-screen-button"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-envelope"></i> conatct@cartradingchennai.com</p>
</div>
</div>
<div class="col-lg-6">
<div class="dealer-btn">
<center><a href="dealer-profile.php"><button type="button" class="btn btn-success">Visit Dealer Website <i class="fa-solid fa-up-right-from-square"></i></button></a>
<a href="dealer-profile.php"><button type="button" class="btn btn-light"><i class="fa-solid fa-car"></i> View Cars</button></a></center>
</div>
</div>
</div>
</div>
<div class="dealer-item">
<div class="row">
<div class="col-lg-6">
<div class="dealer-details">
<a href="dealer-profile.php"><h4><i class="fa-solid fa-car"></i> Sai Car Trades</h4></a>
<small>(48km away)</small>
<address>
<i class="fa-solid fa-location-dot"></i> New No 114, 86, Dr Radhakrishnan Salai, Near Yellow Pages, Mylapore, Mylapore, Chennai, Tamil Nadu 600004
</address>
<p><i class="fa-solid fa-phone"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-mobile-screen-button"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-envelope"></i> conatct@saitradecars.com</p>
</div>
</div>
<div class="col-lg-6">
<div class="dealer-btn">
<center>
<button type="button" class="btn btn-light"><i class="fa-solid fa-car"></i> View Cars</button></center>
</div>
</div>
</div>
</div>
<div class="dealer-item">
<div class="row">
<div class="col-lg-6">
<div class="dealer-details">
<a href="dealer-profile.php"><h4><i class="fa-solid fa-car"></i> Manju Associates Pvt Ltd</h4></a>
<small>(18km away)</small>
<address>
<i class="fa-solid fa-location-dot"></i> New No 114, 86, Dr Radhakrishnan Salai, Near Yellow Pages, Mylapore, Mylapore, Chennai, Tamil Nadu 600004
</address>
<p><i class="fa-solid fa-phone"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-mobile-screen-button"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-envelope"></i> conatct@manjuassociates.com</p>
</div>
</div>
<div class="col-lg-6">
<div class="dealer-btn">
<center><button type="button" class="btn btn-success">Visit Dealer Website <i class="fa-solid fa-up-right-from-square"></i></button>
<button type="button" class="btn btn-light"><i class="fa-solid fa-car"></i> View Cars</button></center>
</div>
</div>
</div>
</div>
<div class="dealer-item">
<div class="row">
<div class="col-lg-6">
<div class="dealer-details">
<a href="dealer-profile.php"><h4><i class="fa-solid fa-car"></i> Trade Cars Pvt Ltd</h4></a>
<small>(29km away)</small>
<address>
<i class="fa-solid fa-location-dot"></i> New No 114, 86, Dr Radhakrishnan Salai, Near Yellow Pages, Mylapore, Mylapore, Chennai, Tamil Nadu 600004
</address>
<p><i class="fa-solid fa-phone"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-mobile-screen-button"></i> +91 98765 43210</p>
<p><i class="fa-solid fa-envelope"></i> conatct@tradecars.com</p>
</div>
</div>
<div class="col-lg-6">
<div class="dealer-btn">
<center>
<button type="button" class="btn btn-light"><i class="fa-solid fa-car"></i> View Cars</button></center>
</div>
</div>
</div>
</div>
<div class="dealer-pagination">
 <ul class="pagination justify-content-end">
    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
  </ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!---DEALER LISTING END--->

<!---FOOTER START--->
<?php include 'footer.php';?>
<!---FOOTER END--->
<!---FONTAWESOME JS START--->
<script src="icons/js/all.js"></script>
<!---COMMON JS START--->
<script src="js/jquery.min.js"></script>
<!---BOOTSTRAP JS START--->
<script src="js/bootstrap.bundle.min.js"></script>
<!---JS END--->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TradeCars - Buy and Sell Used Car Online | Verified Cars</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Sell used Car Online via TradeCars. Free registration to buy and sell my used car in all Top brands. Book an Appointment. Car dealers or buyers visit at Home.">
<meta name="keywords" content="sell used car online, sell used car, sell my used car, best place to sell used car, best site to sell used car, sell my car for cash today">
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


<!---CAR LISTING START--->
<div class="container">
<div class="dealer-search">
<div class="row">
<div class="col-lg-9"><h4>Used Cars Inventory</h4></div>
<div class="col-lg-3">
<form>
   <select class="form-select">
     <option>Price-Lowest</option>
     <option>Price-Highest</option>
     <option>Mileage-Lowest</option>
     <option>Mileage-Highest</option>
	 <option>Year-Lowest</option>
	 <option>Year-Highest</option>
   </select>
</form>
</div>
</div>
</div>
<div class="car-dealer-container">
<div class="row">
<div class="col-lg-3">
<div class="dealer-filter">
<div class="dealer-filter-item">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Price Range
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
        <div class="col-md-6">
		<div class="form-group">
        <label for="usr">Min Price</label>
        <input type="text" class="form-control" id="usr">
        </div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
        <label for="usr">Max Price</label>
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
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
        Year
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
        <div class="col-md-6">
		<div class="form-group">
        <label for="usr">Min Year</label>
        <input type="text" class="form-control" id="usr">
        </div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
        <label for="usr">Max Year</label>
        <input type="text" class="form-control" id="usr">
        </div>
		</div>
		</div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
        Mileage
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="collapseThree">
        Style
      </button>
    </h2>
    <div id="c6" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c7" aria-expanded="false" aria-controls="collapseThree">
        Drive Type
      </button>
    </h2>
    <div id="c7" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
       <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c8" aria-expanded="false" aria-controls="collapseThree">
        Transmission
      </button>
    </h2>
    <div id="c8" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c9" aria-expanded="false" aria-controls="collapseThree">
        Cylinders
      </button>
    </h2>
    <div id="c9" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c10" aria-expanded="false" aria-controls="collapseThree">
        Fuel Type
      </button>
    </h2>
    <div id="c10" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
       <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c11" aria-expanded="false" aria-controls="collapseThree">
        Fuel Economy
      </button>
    </h2>
    <div id="c11" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c12" aria-expanded="false" aria-controls="collapseThree">
        Exteriors Color
      </button>
    </h2>
    <div id="c12" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c13" aria-expanded="false" aria-controls="collapseThree">
        Interiors Color
      </button>
    </h2>
    <div id="c13" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c14" aria-expanded="false" aria-controls="collapseThree">
        Features
      </button>
    </h2>
    <div id="c14" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c15" aria-expanded="false" aria-controls="collapseThree">
        Listing Features
      </button>
    </h2>
    <div id="c15" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c16" aria-expanded="false" aria-controls="collapseThree">
        Price Ratings
      </button>
    </h2>
    <div id="c16" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
      <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c17" aria-expanded="false" aria-controls="collapseThree">
        Doors
      </button>
    </h2>
    <div id="c17" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">New</label>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="car-dealer-item-container">
<div class="results">1-25 of 25 + Results</div>
<div class="car-dealer-item">
<div class="row">
<div class="col-lg-4">
<div class="car-dealer-image">
<div class="wishlist"></div>
<a href="car-details.php"><img src="img/c1.jpg" class="img-fluid"></a>
</div>
</div>
<div class="col-lg-8">
<div class="car-dealer-details">
<div class="best-offer"></div>
<div class="price">4,500</div>
<a href="car-details.php"><h4 class="pb-2"><i class="fa-solid fa-car"></i> Used 2007 Ford Fusion SE</h4></a>
<h6 class="new">Newly Listed <i class="fa-solid fa-tag"></i></h6>
<h5 class="pb-2 border-bottom">Features</h5>
<p>205,338 Miles</p>
<p>Exterior Color: RedDrive Type: 2 Wheel Drive - FrontEngine: 4-Cylinder</p>
<h5 class="pb-2 border-bottom">Details</h5>
<p><strong class="blue"><a href="#">Becker Autos & Trailers</a></strong>&nbsp;<small>(1.63 mi. away)</small></p>
<p><small><a href="#">Get this seller's phone number</a></small></p>
<div class="show-me"></div>
</div>
</div>
</div>
</div>
<div class="car-dealer-item">
<div class="row">
<div class="col-lg-4">
<div class="car-dealer-image">
<div class="wishlist"></div>
<a href="car-details.php"><img src="img/c1.jpg" class="img-fluid"></a>
</div>
</div>
<div class="col-lg-8">
<div class="car-dealer-details">
<div class="best-offer"></div>
<div class="price">4,500</div>
<a href="car-details.php"><h4 class="pb-2"><i class="fa-solid fa-car"></i> Used 2007 Ford Fusion SE</h4></a>
<h6 class="new">Newly Listed <i class="fa-solid fa-tag"></i></h6>
<h5 class="pb-2 border-bottom">Features</h5>
<p>205,338 Miles</p>
<p>Exterior Color: RedDrive Type: 2 Wheel Drive - FrontEngine: 4-Cylinder</p>
<h5 class="pb-2 border-bottom">Details</h5>
<p><strong class="blue"><a href="#">Becker Autos & Trailers</a></strong>&nbsp;<small>(1.63 mi. away)</small></p>
<p><small><a href="#">Get this seller's phone number</a></small></p>
<div class="show-me"></div>
</div>
</div>
</div>
</div>
<div class="car-dealer-item">
<div class="row">
<div class="col-lg-4">
<div class="car-dealer-image">
<div class="wishlist"></div>
<a href="car-details.php"><img src="img/c1.jpg" class="img-fluid"></a>
</div>
</div>
<div class="col-lg-8">
<div class="car-dealer-details">
<div class="best-offer"></div>
<div class="price">4,500</div>
<a href="car-details.php"><h4 class="pb-2"><i class="fa-solid fa-car"></i> Used 2007 Ford Fusion SE</h4></a>
<h6 class="new">Newly Listed <i class="fa-solid fa-tag"></i></h6>
<h5 class="pb-2 border-bottom">Features</h5>
<p>205,338 Miles</p>
<p>Exterior Color: RedDrive Type: 2 Wheel Drive - FrontEngine: 4-Cylinder</p>
<h5 class="pb-2 border-bottom">Details</h5>
<p><strong class="blue"><a href="#">Becker Autos & Trailers</a></strong>&nbsp;<small>(1.63 mi. away)</small></p>
<p><small><a href="#">Get this seller's phone number</a></small></p>
<div class="show-me"></div>
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
<h5 class="pb-2 border-bottom">Dealer Disclaimer</h5>
<p>Sales Tax, Title, License Fee, Registration Fee, Dealer Documentary Fee, 
Finance Charges, Emission Testing Fees and Compliance Fees are additional to the advertised price.</p>
</div>
</div>
</div>
</div>
<!---CAR LISTING END--->

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

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Tradecars-Admin</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-small.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
<?php include 'header.php';?>

<?php include 'menu.php';?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Car</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="add_car.php">Add Car</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Dealership Registration Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add Car Details</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
					<form>
					<div class="row">
						<div class="form-group col-md-4">	
						<label>Year of Registration*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>2022</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
									<option>2018</option>
									<option>2017</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Brand*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Hyundai</option>
                                    <option>Honda</option>
                                    <option>Toyota</option>
                                    <option>Maruti</option>
									<option>Tata</option>
									<option>KIA</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Model*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>XVI 500</option>
                                    <option>XDI 600</option>
								</select>
						</div>
						<div class="form-group col-md-4">
							<label>Mileage*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">	
						<label>Fuel Type*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Petrol</option>
                                    <option>Diesel</option>
									<option>CNG</option>
								</select>
						</div>
						<div class="form-group col-md-4">
							<label>Vin Number*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">	
						<label>Vehicle Condition*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Fair</option>
                                    <option>Good</option>
									<option>Average</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Vehicle Condition*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Fair</option>
                                    <option>Good</option>
									<option>Average</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Owner Type*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Single Owner</option>
                                    <option>Second Owner</option>
                                    <option>Third Owner</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Transmission*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Automatic</option>
                                    <option>Manual</option>
								</select>
						</div>
						</div>
						<h4 class="text-blue h4">Personal Details</h4>
						<div class="row">
                       <div class="form-group col-md-4">
							<label>First Name*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">
							<label>Last Name*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">
							<label>Email*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">
							<label>Mobile No*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">
							<label>ZIP Code*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Upload Car Image 1</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label>Upload Car Image 2</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
						</div>
						<button type="button" class="btn btn-primary">Reset</button>
						<button type="button" class="btn btn-success">Submit</button>
					</form>
				</div>
							
				<!-- Business strategy End -->
				
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Car Listings</h4>
					</div>
					<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">S.No</th>
								<th scope="col">Car</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Phone No</th>
								<th scope="col">Zipcode</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td><img src="vendors/images/car.png"></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td><img src="vendors/images/car.png"></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td><img src="vendors/images/car.png"></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td><img src="vendors/images/car.png"></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td><img src="vendors/images/car.png"></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="striped-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="striped-table-code">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
    </tr>
  </tbody>
</table>
							</code></pre>
						</div>
					</div>
				</div>
				</div>
				<!-- Simple Datatable End -->
				
			</div>
			<?php include 'footer.php';?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
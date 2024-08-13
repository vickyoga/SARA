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
								<h4>Dealership Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="dealer_register.php">Dealership Profile</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Dealership Registration Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Dealership Profile</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
					<form>
					<div class="row">
						<div class="form-group col-md-6">
							<label>First Name*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Last Name*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Phone Number*</label>
							<input class="form-control" value="" type="number">
						</div>
						<div class="form-group col-md-6">
							<label>Email*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-9">
							<label>Company*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-3">
							<label>City*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-4">	
						<label>State*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Tamilnadu</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Bangalore</option>
								</select>
						</div>
						<div class="form-group col-md-4">
							<label>Zipcode*</label>
							<input type="text" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group col-md-4">	
						<label>Inventory Count*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>0-36</option>
                                    <option>36-100</option>
                                    <option>150-250</option>
									<option>100-150</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>How can we help you?*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Become a Registered Dealer</option>
                                    <option>Pricing Information</option>
                                    <option>At Home Services</option>
                                    <option>Digital Retailing</option>
                                    <option>National/Regional Advertising</option>
                                    <option>Insights & Research </option>
                                    <option>Service/Support/Billing </option>
                                    <option>Other</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Are you a current client*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Yes</option>
                                    <option>No</option>
								</select>
						</div>
						<div class="form-group col-md-4">	
						<label>Dealership type*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Franchise</option>
                                    <option>Independent</option>
								</select>
						</div>
						</div>
                            <div class="form-group">
							<label>Additional details*</label>
							<textarea class="form-control"></textarea>
						    </div>
						<button type="button" class="btn btn-primary">Reset</button>
						<button type="button" class="btn btn-success">Submit</button>
					</form>
				</div>
							
				<!-- Business strategy End -->
				
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Dealer Profile Listings</h4>
					</div>
					<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">S.No</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Phone No</th>
								<th scope="col">Company</th>
								<th scope="col">Address</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Prabakar</td>
								<td>Prabakar.atv@gmail.com</td>
								<td>+91 98745 63214</td>
								<td>Manju Associates Pvt Ltd</td>
								<td>New No 114,Dr Radhakrishnan Salai, Mylapore, Chennai, </td>									
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Prabakar</td>
								<td>Prabakar.atv@gmail.com</td>
								<td>+91 98745 63214</td>
								<td>Manju Associates Pvt Ltd</td>
								<td>New No 114,Dr Radhakrishnan Salai, Mylapore, Chennai, </td>								
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Prabakar</td>
								<td>Prabakar.atv@gmail.com</td>
								<td>+91 98745 63214</td>
								<td>Manju Associates Pvt Ltd</td>
								<td>New No 114,Dr Radhakrishnan Salai, Mylapore, Chennai, </td>									
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Prabakar</td>
								<td>Prabakar.atv@gmail.com</td>
								<td>+91 98745 63214</td>
								<td>Manju Associates Pvt Ltd</td>
								<td>New No 114,Dr Radhakrishnan Salai, Mylapore, Chennai, </td>									
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>Prabakar</td>
								<td>Prabakar.atv@gmail.com</td>
								<td>+91 98745 63214</td>
								<td>Manju Associates Pvt Ltd</td>
								<td>New No 114,Dr Radhakrishnan Salai, Mylapore, Chennai, </td>									
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
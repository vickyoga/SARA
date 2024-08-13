<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Tradecars Admin</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

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
								<h4>VIN Check</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">VIN Check</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				<!-- Dealership Registration Start -->
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">VIN Check</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
					<form>
					<div class="row">
						<div class="form-group col-md-12">
							<label>Search by VIN*</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-success">GET CARFAX REPORT</button>
						</div>
						</div>
						<h4 class="text-blue h4">OR</h4>
						<div class="row">						
						<div class="form-group col-md-6">
							<label>Search by License Plate*</label>
							<input class="form-control" value="" type="text">
						</div>
						<div class="form-group col-md-6">	
						<label>State*</label>
								<select class="custom-select">
									<option selected="">Choose...</option>
									<option>Tamilnadu</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Bangalore</option>
								</select>
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-success">GET CARFAX REPORT</button>
						</div>
						</div>
						<button type="button" class="btn btn-primary">Reset</button>
						<button type="button" class="btn btn-success">Submit</button>
					</form>
				</div>		
				<!-- Dealership Registration End -->
				
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">VIN Check Listings</h4>
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
								<td><i class="icon-copy dw dw-car"></i></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td><i class="icon-copy dw dw-car"></i></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td><i class="icon-copy dw dw-car"></i></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td><i class="icon-copy dw dw-car"></i></td>
								<td>Anand Kumar</td>
								<td>anandtv@gmail.com</td>
								<td>+91 98745 63214</td>	
								<td>600083</td>
								<td><span class="badge badge-success">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span>&nbsp;<span class="badge badge-success">Active</span></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td><i class="icon-copy dw dw-car"></i></td>
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
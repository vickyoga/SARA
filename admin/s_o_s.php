<?php
Error_reporting(0);
include("include/config.php");
?>
<?php
       if(!empty($_REQUEST['id_fp']))
	   {
		$id_fp=$_REQUEST['id_fp'];
		
		$post_msg = "";
		$succ_msg = "";
		$err_msg = "";
		$url_Error="";
		$msg="";	
   
		if(isset($_POST['e_our_sa_title']))
		{ 
			$e_our_sa_title= $_POST['e_our_sa_title'];  
			$e_our_sa_cont= $_POST['e_our_sa_cont'];  

			if( !empty($e_our_sa_title) && !empty($e_our_sa_cont) )
				{
				 $insq1 = mysqli_query($dbcon1,"UPDATE `our_sa` SET `our_sa_title`='".$e_our_sa_title."' ,`our_sa_cont`='".$e_our_sa_cont."' WHERE `id_our_sa`=".$id_fp."") or die(mysqli_Error($dbcon1));
					if($insq1)
					{
					$post_msg = "Your Our Sustainability Edited Successfully";
					}
					else
					{
					$err_msg = "Your Our Sustainability Editing Problems";
					}
					}
					else
					{
					$err_msg = "You Must Be Provide a Valid Our Sustainability Details";
					}	
		}
		?>



<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>admin</title>

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
								<h4> Edit Our Sustainability</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="s_o_s.php">Our Sustainability</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<?php
       				 $query ="SELECT `id_our_sa`, `our_sa_title`, `our_sa_cont`, `date_time`, `active_record` FROM `our_sa` WHERE id_our_sa=".$id_fp."";
        			$execute_qry = mysqli_query($dbcon1,$query)or die("Our Sustainability Retriew Error!");          
       	 			while($team = mysqli_fetch_array($execute_qry)) {
        			$id_our_sa = $team['id_our_sa'];
        			$our_sa_title = $team['our_sa_title'];
        			$our_sa_cont = $team['our_sa_cont'];
      				
      			?>
                <!-- Sustainability  edit Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Our Sustainability</h4>
						
						</div>
					</div>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Title</label>
							<input type="text"  name="e_our_sa_title"class="form-control" value="<?php print $our_sa_title?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="html-editor mb-30">
					<h4 class="h4 text-blue">Content</h4>
					<textarea class="textarea_editor form-control border-radius-0" name="e_our_sa_cont" placeholder="Enter text ..."> <?php print $our_sa_cont?></textarea>
					<small class="form-text text-muted">
							  Notes : Help notes
							</small>
				</div>
						<button type="reset" class="btn btn-primary">Reset</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
					<?php 
		            }
				?> 
				</div>	
                
				<?php
					if(!empty($post_msg))
					{
						echo "<p style='color:green;font-weight:bold;'>".$post_msg."</p>";
					}
					
          			else if(!empty($err_msg))
					{
						echo "<p style='color:red;font-weight:bold;'>".$err_msg."</p>";
					}else if(!empty($url_Error))
					{
						echo "<p style='color:red;font-weight:bold;'>".$url_Error."</p>";
					}
					 
					?>

				<?php
	}
	// active status start
     
      else if(!empty($_REQUEST['upd'])){
      $id_fp=$_REQUEST['upd'];
      if(!empty($id_fp))
      {
        $query = "SELECT `id_our_sa`, `our_sa_title`, `our_sa_cont`, `date_time`, `active_record` FROM `our_sa` WHERE  id_our_sa=".$id_fp."";
        $execute_qry = mysqli_query($dbcon1,$query)or die("Our Sustainability Retriew Error!");          
        while($team = mysqli_fetch_array($execute_qry)) {
        $active_record = $team['active_record'];
        if ($active_record == 0)
        {
          $insq1 = mysqli_query($dbcon1,"UPDATE `our_sa` SET `active_record`=1 WHERE `id_our_sa`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="s_o_s.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Activation Problems"); window.location="s_o_s.php";</script>');
            //$err_msg = "client Delete Problems";
          }
    	}
        else
        {
            $insq1 = mysqli_query($dbcon1,"UPDATE our_sa SET active_record = 0  WHERE `id_our_sa`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="s_o_s.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="s_o_s.php";</script>');
            //$err_msg = "client Delete Problems";
          }
        }
        }
      }
    }  
	   
	// active status end


	// Delete start

    else if(!empty($_REQUEST['del'])){
      $id_fp=$_REQUEST['del'];
      if(!empty($id_fp))
      {
            $insq1 = mysqli_query($dbcon1,"DELETE FROM `our_sa` WHERE `id_our_sa`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Our Sustainability  Delete Sucessfully"); window.location="s_o_s.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Our Sustainability  Delete Problems"); window.location="s_o_s.php";</script>');
            //$err_msg = "client Delete Problems";
          }
      }
    } 
 else{
	   // Delete End
 ?>



<?php

	$post_msg = "";
	$succ_msg = "";
	$err_msg = "";
	$url_Error="";
	$msg="";

    if(isset($_POST['our_sa_title']))
    { 
		$our_sa_title = $_POST['our_sa_title'];  
        $our_sa_cont =$_POST['our_sa_cont'];
//&& !empty($b_img_path)
        if(!empty($our_sa_title) && !empty($our_sa_cont))
		{
			$selq1 = mysqli_query($dbcon1,"SELECT * FROM our_sa WHERE our_sa_title='$our_sa_title' and active_record=1") or die(mysqli_Error($dbcon1));

			if (mysqli_num_rows($selq1) > 0) 
			{
			$url_Error = "Sorry... Our Sustainability  Already Exist";
			}
			else
			{
				$insq1 = mysqli_query($dbcon1,"insert into our_sa(our_sa_title,our_sa_cont) values('$our_sa_title','$our_sa_cont')") or die(mysqli_Error($dbcon1));
			if($insq1)
			{
				$post_msg = "Your Our Sustainability Added Successfully";
			}
			else
			{
				$err_msg = "Your Our Sustainability Adding Problems";
			}
		}

				
			}
			else
			{
				$err_msg = "You Must Be Provide a Valid Our Sustainability Details";
			}	
		
			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>admin</title>

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
								<h4>Our Sustainability</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="s_o_s.php">Our Sustainability</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				
				

				<!-- Sustainability Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Our Sustainability</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Title</label>
							<input type="text"  name="our_sa_title" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="html-editor mb-30">
					<h4 class="h4 text-blue">Content</h4>
					<textarea class="textarea_editor form-control border-radius-0" name="our_sa_cont" placeholder="Enter text ..."></textarea>
					<small class="form-text text-muted">
							  Notes : Help notes
							</small>
				</div>
						<button type="reset" class="btn btn-primary">Reset</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>	
				<?php
					if(!empty($post_msg))
					{
						echo "<p style='color:green;font-weight:bold;'>".$post_msg."</p>";
					}
					
          			else if(!empty($err_msg))
					{
						echo "<p style='color:red;font-weight:bold;'>".$err_msg."</p>";
					}else if(!empty($url_Error))
					{
						echo "<p style='color:red;font-weight:bold;'>".$url_Error."</p>";
					}
					
					?>
				<!-- Sustainability End -->
                

				<!-- data tables strt -->

				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Sustainability</h4>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="table-primary">
								<th scope="col">SL.No.</th>
								<th scope="col">Title</th>
								<th scope="col">Content</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
                   $query = "SELECT `id_our_sa`, `our_sa_title`, `our_sa_cont`, `date_time`, `active_record` FROM `our_sa` ";
                   $execute_qry = mysqli_query($dbcon1,$query)or die("Our Sustainability Retriew Error!");          
                   $i=0;
				   while($team = mysqli_fetch_array($execute_qry)) {
				   $i++;
                   $id_our_sa = $team['id_our_sa'];
                   $our_sa_title = $team['our_sa_title'];
                   $our_sa_cont = $team['our_sa_cont'];
                   $active_record = $team['active_record'];
                ?>
							<tr>
								<th scope="row"><?php print $i ?></th>
								<td><?php print $our_sa_title?></td>
								<td><?php print $our_sa_cont?> </td>
								<td><a href='?upd=<?php print $id_our_sa ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
									<a href='?id_fp=<?php print $id_our_sa ?>'><input type='hidden' name='po' value="<?php print $id_our_sa ?>"/><span class="badge badge-warning">Edit</span></a>&nbsp;
									<a href='?del=<?php print $id_our_sa ?>'><input type='hidden' name='dl' value="<?php print $id_our_sa ?>"/> <span class="badge badge-danger">Delete</span></a>
							   </td>
							</tr>
				<?php
                  }
                ?>
							<!-- <tr>
								<th scope="row">1</th>
								<td>MOVING FORWARD</td>
								<td>To become a universal creator platform. </td>
								<td><span class="badge badge-success">Active</span>&nbsp;<span class="badge badge-warning">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>FLAWLESS EXECUTION</td>
								<td>To make the world suitable for our future generation. </td>
								<td><span class="badge badge-success">Active</span>&nbsp;<span class="badge badge-warning">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>INDUSTRY DISRUPTION</td>
								<td>Helping brands to make their product from best to great. </td>
								<td><span class="badge badge-success">Active</span>&nbsp;<span class="badge badge-warning">Edit</span>&nbsp;<span class="badge badge-danger">Delete</span></td>
							</tr> -->
						</tbody>
					</table>
				</div>		
				<!-- data tables end -->


				<?php
                  }
                ?>

                </div>
			<?php include 'footer.php';?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>

	<script src="lib/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="lib/datatable/jquery.dataTables.min.css">
    <script src="lib/datatable/jquery.dataTables.min.js"></script>



 <script>
          $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
 
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
 
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
        </script>`
</body>
</html>
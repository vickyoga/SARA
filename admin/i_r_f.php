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

    if(isset($_POST['e_ir_title']))
    { 
		
		$existing_imag=$_POST['existing_imag'];
      if($_FILES["e_uploadfi"]["size"]>0)
	    {
		    if(!empty($existing_imag))
		    {
			    unlink($existing_imag);
		    }
            $uploadDirectory = "image/Financials_pdf/";
            $allowedExts = array("application/pdf");
            $file_type = $_FILES['e_uploadfi']['type']; 
            $randString = md5(time()); 
            $fileName = $_FILES["e_uploadfi"]["name"]; 
            $splitName = explode(".", $fileName); 
            $fileExt = end($splitName); 
            $newFileName  = strtolower($randString.'.'.$fileExt);
            if (($_FILES["e_uploadfi"]["size"] < 90000000000000000000000000000000000) && in_array($file_type, $allowedExts))
            {
             	if ($_FILES["e_uploadfi"]["Error"] > 0)
             	{
            	 $err_msg = $_FILES["e_uploadfi"]["Error"] . "<br />";
             	}
             else
              {
                if(file_exists($uploadDirectory . $newFileName))
                {
                  $err_msg = $newFileName . " already exists. ";
                }
                else
                {
                  move_uploaded_file($_FILES["e_uploadfi"]["tmp_name"],	$uploadDirectory.$newFileName);
                  $e_pdf_path = $uploadDirectory.$newFileName;
                }
              }
            }
            else
            {
              $err_msg = "Your image file is not supportable format or size is too large, kindly follow the insructions properly! ";
            }
      }
      else
      {
        $e_pdf_path = $existing_imag;
      }  
	


      $existing_image=$_POST['existing_image'];
      if($_FILES["e_uploadfile"]["size"]>0)
	    {
		    if(!empty($existing_image))
		    {
			    unlink($existing_image);
		    }
            $uploadDirectory = "image/ir_img/";
            $allowedExts = array("image/jpeg", "image/jpg", "image/png","image/webp");
            $file_type = $_FILES['e_uploadfile']['type']; 
            $randString = md5(time()); 
            $fileName = $_FILES["e_uploadfile"]["name"]; 
            $splitName = explode(".", $fileName); 
            $fileExt = end($splitName); 
            $newFileName  = strtolower($randString.'.'.$fileExt);
            if (($_FILES["e_uploadfile"]["size"] < 90000000000000000000000000000000000) && in_array($file_type, $allowedExts))
            {
             	if ($_FILES["e_uploadfile"]["Error"] > 0)
             	{
            	 $err_msg = $_FILES["e_uploadfile"]["Error"] . "<br />";
             	}
             else
              {
                if(file_exists($uploadDirectory . $newFileName))
                {
                  $err_msg = $newFileName . " already exists. ";
                }
                else
                {
                  move_uploaded_file($_FILES["e_uploadfile"]["tmp_name"],	$uploadDirectory.$newFileName);
                  $e_ir_img_path = $uploadDirectory.$newFileName;
                }
              }
            }
            else
            {
              $err_msg = "Your image file is not supportable format or size is too large, kindly follow the insructions properly! ";
            }
      }
      else
      {
        $e_ir_img_path = $existing_image;
      }   
	  $e_ir_title = $_POST['e_ir_title'];  
	  $e_ir_content =$_POST['e_ir_content'];


        $data = getimagesize($e_ir_img_path);
        $width = $data[0];
        $height = $data[1];
        if($height != "768" && $width !="960"){
          $err_msg = 'Your Given Height('.$height.'),Width('.$width.') Is Not Matching';
        }
	     
               
               else if(!empty($e_ir_title) && !empty($e_ir_content))
                {
                    $insq1 = mysqli_query($dbcon1,"UPDATE `ir` SET `ir_title`='".$e_ir_title."',`ir_content`='".$e_ir_content."',`ir_img_path`='".$e_ir_img_path."',`pdf_path`='".$e_pdf_path."' WHERE `id_ir`=".$id_fp."") or die(mysqli_Error($dbcon1));
                    if($insq1)
                    {
                    $post_msg = "Your Investor Relations Edited Successfully";
                    }
                    else
                    {
                    $err_msg = "Your Investor Relations Editing Problems";
                    }
                }
                else
                {
                $err_msg = "You must be provide a valid Investor Relations Details";
                }	
    }?>

    <!-- Edit Form Start-->

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
								<h4> Edit Investor Relations - Finacial</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="i_r_f.php">Investor Relations</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Banner Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4"> Investor Relations</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<?php
       				 $query ="SELECT `id_ir`, `ir_img_path`, `ir_title`,`pdf_path`, `ir_content`, `date_time`, `active_record` FROM `ir` WHERE   id_ir=".$id_fp."";
        			$execute_qry = mysqli_query($dbcon1,$query)or die("Investor Relations Retriew Error!");          
       	 			while($team = mysqli_fetch_array($execute_qry)) {
        			$id_ir = $team['id_ir'];
        			$ir_title = $team['ir_title'];
        			$ir_content = $team['ir_content'];
      				$ir_img_path = $team['ir_img_path'];
					  $pdf_path = $team['pdf_path'];
      			?>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label> Image Uplaod</label>
							<input type="file" name="e_uploadfile" class="form-control-file form-control height-auto">
							<input type="hidden"	name="existing_image" value="<?php print $ir_img_path?>" />
							<small class="form-text text-muted">
							Notes : Banner width:960px and height:768px.
							</small>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="e_ir_title" class="form-control" value="<?php print $ir_title?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Content</label>
							<input type="text" name="e_ir_content" class="form-control" value="<?php print $ir_content?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label> Pdf Uplaod</label>
							<input type="file" name="e_uploadfi" class="form-control-file form-control height-auto">
							<input type="hidden"	name="existing_imag" value="<?php print $pdf_path?>" />
							<small class="form-text text-muted">
							Notes : Pdf file format upload.
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
					</div>

					<!-- Edit Form End-->
	<?php
	}
	// active status start
     
    else if(!empty($_REQUEST['upd'])){
      $id_fp=$_REQUEST['upd'];
      if(!empty($id_fp))
      {
        $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `date_time`, `active_record` FROM `ir` WHERE  `id_ir`=".$id_fp."";
        $execute_qry = mysqli_query($dbcon1,$query)or die("Investor Relations Retriew Error!");          
        while($team = mysqli_fetch_array($execute_qry)) {
        $active_record = $team['active_record'];
        if ($active_record == 0)
        {
          $insq1 = mysqli_query($dbcon1,"UPDATE `ir` SET `active_record`=1 WHERE `id_ir`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="i_r_f.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Activation Problems"); window.location="i_r_f.php";</script>');
            //$err_msg = "client Delete Problems";
          }
          }
        else
        {
            $insq1 = mysqli_query($dbcon1,"UPDATE ir SET active_record = 0  WHERE `id_ir`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="i_r_f.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="i_r_f.php";</script>');
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
    
            $insq1 = mysqli_query($dbcon1,"DELETE FROM `ir` WHERE `id_ir`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Investor Relations  Delete Sucessfully"); window.location="i_r_f.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Investor Relations  Delete Problems"); window.location="i_r_f.php";</script>');
            //$err_msg = "client Delete Problems";
          }
      }
    } 
 else{
	   // Delete End
 ?>
 <!-- Set Image Path  start-->
<?php
	$post_msg = "";
	$succ_msg = "";
	$err_msg = "";
	$url_Error="";
	$msg="";


	if(isset($_POST['ir_title']))
       { 
		   

        $uploadDirectorys = "image/Financials_pdf/";
		$allowedExtss = array("application/pdf");
		$file_types = $_FILES['uploadfi']['type']; 
		$randStrings = md5(time()); 
		$fileNames = $_FILES["uploadfi"]["name"]; 
		$splitNames = explode(".", $fileNames); 
		$fileExts = end($splitNames); 
		$newFileNames  = strtolower($randStrings.'.'.$fileExts);
    if (($_FILES["uploadfi"]["size"] < 90000000000000000000000000000000000) && in_array($file_types, $allowedExtss))
		{
			
			if ($_FILES["uploadfi"]["Error"] > 0)
			{
				
				$err_msgs = $_FILES["uploadfi"]["Error"] . "<br />";
			}
			else
			{
				
				if (file_exists($uploadDirectorys . $newFileNames))
				{
					
					$err_msgs = $newFileNames . " already exists. ";
				}
				else
				{
					// echo "hi";exit;
					move_uploaded_file($_FILES["uploadfi"]["tmp_name"],	$uploadDirectorys.$newFileNames);
					
					$pdf_path = $uploadDirectorys.$newFileNames;
				}
			}
		}
		else
		{
			$err_msg = "Your image file is not supportable format or size is too large, kindly follow the insructions properly! ";
		}


    
		$uploadDirectory = "image/ir_img/";
		$allowedExts = array("image/jpeg", "image/jpg", "image/png","image/webp");
		$file_type = $_FILES['uploadfile']['type']; 

		$randString = md5(time()); 
		$fileName = $_FILES["uploadfile"]["name"]; 
		$splitName = explode(".", $fileName); 
		$fileExt = end($splitName); 
		$newFileName  = strtolower($randString.'.'.$fileExt);
    	if (($_FILES["uploadfile"]["size"] < 90000000000000000000000000000000000) && in_array($file_type, $allowedExts))
		{
			if ($_FILES["uploadfile"]["Error"] > 0)
			{
				$err_msg = $_FILES["uploadfile"]["Error"] . "<br />";
			}
			else
			{
				if (file_exists($uploadDirectory . $newFileName))
				{
					$err_msg = $newFileName . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["uploadfile"]["tmp_name"],	$uploadDirectory.$newFileName);
					$ir_img_path = $uploadDirectory.$newFileName;
				}
			}
		}
		else
		{
			$err_msg = "Your image file is not supportable format or size is too large, kindly follow the insructions properly! ";
		}
		
		$ir_title = $_POST['ir_title'];  
        $ir_content =$_POST['ir_content'];


		$data = getimagesize($ir_img_path);
        $width = $data[0];
        $height = $data[1];
        if($height != "768" && $width !="960"){
          $err_msg = 'Your Given Height('.$height.'),Width('.$width.') Is Not Matching';
        }
	     
      

       else if(!empty($ir_title) && !empty($ir_content) && !empty($ir_img_path)  && !empty($pdf_path))
		{
			$selq1 = mysqli_query($dbcon1,"SELECT * FROM ir WHERE  ir_title='".$ir_title."' and   active_record=1") or die(mysqli_Error($dbcon1));

			if (mysqli_num_rows($selq1) > 0) 
			{
			$url_Error = "Sorry... Investor Relations  Already Exist";
			}
			else
			{
				$insq1 = mysqli_query($dbcon1,"insert into ir(ir_title,ir_content, ir_img_path,pdf_path) values('$ir_title','$ir_content', '$ir_img_path','$pdf_path')") or die(mysqli_Error($dbcon1));
			if($insq1)
			{
				$post_msg = "Your Investor Relations Added Successfully";
			}
			else
			{
				$err_msg = "Your Investor Relations Adding Problems";
			}
		}

				
			}
			else
			{
				$err_msg = "You Must Be Provide a Valid Investor Relations Details";
			}		
	}
?>

   <!--  Image Path  End-->

   <!-- backend Form start-->

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
								<h4>Investor Relations - Finacial</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="i_r_f.php">Investor Relations</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Banner Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Investor Relations</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label> Image Uplaod</label>
							<input type="file" name="uploadfile" class="form-control-file form-control height-auto">
							<small class="form-text text-muted">
							Notes : Banner width:960px and height:768px.
							</small>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="ir_title" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Content</label>
							<input type="text" name="ir_content" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>

						<div class="form-group">
							<label> Pdf Uplaod</label>
							<input type="file" name="uploadfi" class="form-control-file form-control height-auto">
							<small class="form-text text-muted">
							Notes : Pdf file format upload.
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
						
         <!-- backend Form End-->


        <!-- Data tables strt -->

				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4"> Investor Relations Finacial List</h4>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="table-primary">
								<th scope="col">SL.No.</th>
								<th scope="col">Image</th>
								<th scope="col">Title</th>
								<th scope="col">Content</th>
								<th scope="col">Pdf</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>

				<?php
                   $query = "SELECT `id_ir`, `ir_img_path`, `ir_title`, `ir_content`, `pdf_path`, `date_time`, `active_record` FROM `ir`";
                   $execute_qry = mysqli_query($dbcon1,$query)or die("Investor Relations Retriew Error!");          
                   $i=0;
				   while($team = mysqli_fetch_array($execute_qry)) {
				   $i++;
                   $id_ir = $team['id_ir'];
                   $ir_title = $team['ir_title'];
                   $ir_content = $team['ir_content'];
                   $ir_img_path = $team['ir_img_path'];
				   $pdf_path = $team['pdf_path'];
                   $active_record = $team['active_record'];
                ?>
							<tr>
								<th scope="row"><?php print $i ?></th>
								<td><img src="<?php print $ir_img_path?>"  width="50px" height="50px"></td>
								<td><?php print $ir_title?></td>
								<td><?php print $ir_content?> </td>
								<td><a href="<?php print $pdf_path?>" target="_blank">Download</a> </td>
								<td><a href='?upd=<?php print $id_ir ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
									<a href='?id_fp=<?php print $id_ir ?>'><input type='hidden' name='po' value="<?php print $id_ir ?>"/><span class="badge badge-warning">Edit</span></a>&nbsp;
									<a href='?del=<?php print $id_ir ?>'><input type='hidden' name='dl' value="<?php print $id_ir ?>"/> <span class="badge badge-danger">Delete</span></a>
							   </td>
							</tr>
				<?php
                  }
                ?>
						</tbody>
					</table>
				</div>		
				
				<!-- data tables end -->
			</div>

			<?php
			}         
			include 'footer.php';?>
		</div>
	</div>
  <!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<!-- lafs -->
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
        </script>


	
</body>
</html>
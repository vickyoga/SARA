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

    if(isset($_POST['e_app_list_title']))
    { 
      $existing_image=$_POST['existing_image'];
      if($_FILES["e_uploadfile"]["size"]>0)
	    {
		    if(!empty($existing_image))
		    {
			    unlink($existing_image);
		    }
            $uploadDirectory = "image/app_acc_list_img/";
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
                  $e_app_list_img_path = $uploadDirectory.$newFileName;
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
        $e_app_list_img_path = $existing_image;
      }      

	           $e_app_list_title = $_POST['e_app_list_title'];  
                $e_app_list_subtitle =$_POST['e_app_list_subtitle'];
				$e_app_list_cont =$_POST['e_app_list_cont'];

	  $data = getimagesize($e_app_list_img_path);
	  $width = $data[0];
	  $height = $data[1];
	  if($height != "554" && $width !="1280"){
		  $err_msg = 'Your Given Height('.$height.'),Width('.$width.') Is Not Matching';
	  }
                
               else if(!empty($e_app_list_title) && !empty($e_app_list_subtitle)&& !empty($e_app_list_cont))
                {
                    $insq1 = mysqli_query($dbcon1,"UPDATE `app_acc_list` SET `app_list_title`='".$e_app_list_title."',`app_list_subtitle`='".$e_app_list_subtitle."',`app_list_img_path`='".$e_app_list_img_path."',`app_list_cont`='".$e_app_list_cont."' WHERE `id_app_acc_list`=".$id_fp."") or die(mysqli_Error($dbcon1));
                    if($insq1)
                    {
                    $post_msg = "Your Appearls & Accessories List Edited successfully";
                    }
                    else
                    {
                    $err_msg = "Your Appearls & Accessories List Editing Problems";
                    }
                }
                else
                {
                $err_msg = "You must be provide a valid Appearls & Accessories List Details";
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
								<h4> Edit Appearls & Accessories </h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="v_a_l.php">Appearls & Accessories List</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Banner Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4"> Appearls & Accessories List</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<?php
       				 $query ="SELECT `id_app_acc_list`, `app_list_img_path`, `app_list_title`, `app_list_subtitle`,`app_list_cont`, `date_time`, `active_record` FROM `app_acc_list` WHERE  id_app_acc_list=".$id_fp."";
        			$execute_qry = mysqli_query($dbcon1,$query)or die("Appearls & Accessories List Retriew Error!");          
       	 			while($team = mysqli_fetch_array($execute_qry)) {
        			$id_app_acc_list = $team['id_app_acc_list'];
        			$app_list_title = $team['app_list_title'];
        			$app_list_subtitle = $team['app_list_subtitle'];
      				$app_list_img_path = $team['app_list_img_path'];
					  $app_list_cont = $team['app_list_cont'];
      			?>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label> Image Uplaod</label>
							<input type="file" name="e_uploadfile" class="form-control-file form-control height-auto">
							<input type="hidden"	name="existing_image" value="<?php print $app_list_img_path?>" />
							<small class="form-text text-muted">
							Notes : Image width:1280px and height:554px.
							</small>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="e_app_list_title" class="form-control" value="<?php print $app_list_title?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Sub Title</label>
							<input type="text" name="e_app_list_subtitle" class="form-control" value="<?php print $app_list_subtitle?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Content</label>
							<input type="text" name="e_app_list_cont" class="form-control" value="<?php print $app_list_cont?>">
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
					</div>

					<!-- Edit Form End-->
	<?php
	}
	// active status start
     
    else if(!empty($_REQUEST['upd'])){
      $id_fp=$_REQUEST['upd'];
      if(!empty($id_fp))
      {
        $query = "SELECT `id_app_acc_list`, `app_list_img_path`, `app_list_title`, `app_list_subtitle`,`app_list_cont`, `date_time`, `active_record` FROM `app_acc_list` WHERE `id_app_acc_list`=".$id_fp."";
        $execute_qry = mysqli_query($dbcon1,$query)or die("Appearls & Accessories List Retriew Error!");          
        while($team = mysqli_fetch_array($execute_qry)) {
        $active_record = $team['active_record'];
        if ($active_record == 0)
        {
          $insq1 = mysqli_query($dbcon1,"UPDATE `app_acc_list` SET `active_record`=1 WHERE `id_app_acc_list`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="v_a_l.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Activation Problems"); window.location="v_a_l.php";</script>');
            //$err_msg = "client Delete Problems";
          }
          }
        else
        {
            $insq1 = mysqli_query($dbcon1,"UPDATE app_acc_list SET active_record = 0  WHERE `id_app_acc_list`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="v_a_l.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="v_a_l.php";</script>');
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
    
            $insq1 = mysqli_query($dbcon1,"DELETE FROM `app_acc_list` WHERE `id_app_acc_list`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Appearls & Accessories List  Delete Sucessfully"); window.location="v_a_l.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Appearls & Accessories List  Delete Problems"); window.location="v_a_l.php";</script>');
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
    if(isset($_POST['app_list_title']))
       { 
		$uploadDirectory = "image/app_acc_list_img/";
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
					$app_list_img_path = $uploadDirectory.$newFileName;
				}
			}
		}
		else
		{
			$err_msg = "Your image file is not supportable format or size is too large, kindly follow the insructions properly! ";
		}
		
		$app_list_title = $_POST['app_list_title'];  
        $app_list_subtitle =$_POST['app_list_subtitle'];
		$app_list_cont =$_POST['app_list_cont'];
		
		$data = getimagesize($app_list_img_path);
		$width = $data[0];
		$height = $data[1];
		if($height != "554" && $width !="1280"){
			$err_msg = 'Your Given Height('.$height.'),Width('.$width.') Is Not Matching';
		}

      	

       else if(!empty($app_list_title) && !empty($app_list_subtitle) && !empty($app_list_img_path)&& !empty($app_list_cont))
		{
			$selq1 = mysqli_query($dbcon1,"SELECT * FROM app_acc_list WHERE app_list_title='$app_list_title' and active_record=1") or die(mysqli_Error($dbcon1));

			if (mysqli_num_rows($selq1) > 0) 
			{
			$url_Error = "Sorry... Appearls & Accessories List  Already Exist";
			}
			else
			{
				$insq1 = mysqli_query($dbcon1,"insert into app_acc_list(app_list_title,app_list_subtitle, app_list_img_path,app_list_cont) values('$app_list_title','$app_list_subtitle', '$app_list_img_path','$app_list_cont')") or die(mysqli_Error($dbcon1));
			if($insq1)
			{
				$post_msg = "Your Appearls & Accessories List Added successfully";
			}
			else
			{
				$err_msg = "Your Appearls & Accessories List adding Problems";
			}
		}

				
			}
			else
			{
				$err_msg = "You must be provide a valid Appearls & Accessories List Details";
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
								<h4>Appearls & Accessories</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="v_a_l.php">Appearls & Accessories List</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Banner Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Appearls & Accessories List</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Image Uplaod</label>
							<input type="file" name="uploadfile" class="form-control-file form-control height-auto">
							<small class="form-text text-muted">
							Notes : Image width:1280px and height:554px.
							</small>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="app_list_title" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Sub Title</label>
							<input type="text" name="app_list_subtitle" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Content</label>
							<input type="text" name="app_list_cont" class="form-control">
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
						
         <!-- backend Form End-->


        <!-- Data tables strt -->

				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Appearls & Accessories List</h4>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="table-primary">
								<th scope="col">SL.No.</th>
								<th scope="col">Image</th>
								<th scope="col">Title</th>
								<th scope="col">Sub Title</th>
								<th scope="col">Content</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>

				<?php
                   $query = "SELECT `id_app_acc_list`, `app_list_img_path`, `app_list_title`, `app_list_subtitle`,`app_list_cont`, `date_time`, `active_record` FROM `app_acc_list`";
                   $execute_qry = mysqli_query($dbcon1,$query)or die("Appearls & Accessories List Retriew Error!");          
                   $i=0;
				   while($team = mysqli_fetch_array($execute_qry)) {
				   $i++;
                   $id_app_acc_list = $team['id_app_acc_list'];
                   $app_list_title = $team['app_list_title'];
                   $app_list_subtitle = $team['app_list_subtitle'];
                   $app_list_img_path = $team['app_list_img_path'];
				   $app_list_cont = $team['app_list_cont'];
                   $active_record = $team['active_record'];
                ?>
							<tr>
								<th scope="row"><?php print $i ?></th>
								<td><img src="<?php print $app_list_img_path?>"  width="50px" height="50px"></td>
								<td><?php print $app_list_title?></td>
								<td><?php print $app_list_subtitle?> </td>
								<td><?php print $app_list_cont?> </td>
								<td><a href='?upd=<?php print $id_app_acc_list ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
									<a href='?id_fp=<?php print $id_app_acc_list ?>'><input type='hidden' name='po' value="<?php print $id_app_acc_list ?>"/><span class="badge badge-warning">Edit</span></a>&nbsp;
									<a href='?del=<?php print $id_app_acc_list ?>'><input type='hidden' name='dl' value="<?php print $id_app_acc_list ?>"/> <span class="badge badge-danger">Delete</span></a>
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
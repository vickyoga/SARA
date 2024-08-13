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

    if(isset($_POST['e_str_title']))
    { 
      $existing_image=$_POST['existing_image'];
      if($_FILES["e_uploadfile"]["size"]>0)
	    {
		    if(!empty($existing_image))
		    {
			    unlink($existing_image);
		    }
            $uploadDirectory = "image/bus_str/";
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
                  $e_str_img_path= $uploadDirectory.$newFileName;
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
        $e_str_img_path = $existing_image;
      }  
  
	  $e_str_title = $_POST['e_str_title'];  
	  $e_str_content =$_POST['e_str_content'];

	  $data = getimagesize($e_str_img_path);
	  $width = $data[0];
	  $height = $data[1];
	  if($height != "1380" && $width !="1600"){
		$err_msg = 'Your Given Height('.$height.'),Width('.$width.') Is Not Matching';
	  }

               
               else if(!empty($e_str_title) && !empty($e_str_content))
                {
                    $insq1 = mysqli_query($dbcon1,"UPDATE `bus_str` SET `str_title`='".$e_str_title."',`str_content`='".$e_str_content."',`str_img_path`='".$e_str_img_path."' WHERE `id_bus_str`=".$id_fp."") or die(mysqli_Error($dbcon1));
                    if($insq1)
                    {
                    $post_msg = "Your Business strategy Edited successfully";
                    }
                    else
                    {
                    $err_msg = "Your Business strategy Editing Problems";
                    }
                }
                else
                {
                $err_msg = "You must be provide a valid Business strategy Details";
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
								<h4> Edit Business Strategy</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="b_s_s.php">Business Strategy</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Banner Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4"> Business Strategy</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<?php
       				 $query ="SELECT `id_bus_str`, `str_title`, `str_content`, `str_img_path`, `date_time`, `active_record` FROM `bus_str` WHERE   id_bus_str=".$id_fp."";
        			$execute_qry = mysqli_query($dbcon1,$query)or die("Business Strategy Retriew Error!");          
       	 			while($team = mysqli_fetch_array($execute_qry)) {
        			$id_bus_str = $team['id_bus_str'];
        			$str_title = $team['str_title'];
        			$str_content = $team['str_content'];
      				$str_img_path = $team['str_img_path'];
      			?>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="e_str_title" class="form-control" value="<?php print $str_title?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="form-group">
							<label>Content</label>
							<input type="text" name="e_str_content" class="form-control" value="<?php print $str_content?>">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
                            <div class="form-group">
							<label>Image Uplaod</label>
							<input type="file"  name="e_uploadfile"   value="<?php print $str_img_path?>" class="form-control-file form-control height-auto">
							<small class="form-text text-muted">
							  Notes : Image width:1600px and height:1380px.
							</small>
						</div>
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
        $query = "SELECT `id_bus_str`, `str_title`, `str_content`, `str_img_path`, `date_time`, `active_record` FROM `bus_str` WHERE  `id_bus_str`=".$id_fp."";
        $execute_qry = mysqli_query($dbcon1,$query)or die("Business strategy Retriew Error!");          
        while($team = mysqli_fetch_array($execute_qry)) {
        $active_record = $team['active_record'];
        if ($active_record == 0)
        {
          $insq1 = mysqli_query($dbcon1,"UPDATE `bus_str` SET `active_record`=1 WHERE `id_bus_str`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="b_s_s.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Activation Problems"); window.location="b_s_s.php";</script>');
            //$err_msg = "client Delete Problems";
          }
          }
        else
        {
            $insq1 = mysqli_query($dbcon1,"UPDATE bus_str SET active_record = 0  WHERE `id_bus_str`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="b_s_s.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="b_s_s.php";</script>');
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
    
            $insq1 = mysqli_query($dbcon1,"DELETE FROM `bus_str` WHERE `id_bus_str`=".$id_fp."") or die(mysqli_Error($dbcon1));
          if($insq1)
          {
            echo('<script type="text/javascript">alert(" Business strategy  Delete Sucessfully"); window.location="b_s_s.php";</script>');
           // $post_msg = "client Delete successfully";
          }
          else
          {
            echo('<script type="text/javascript">alert(" Business strategy  Delete Problems"); window.location="b_s_s.php";</script>');
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
    if(isset($_POST['str_title']))
       { 
		$uploadDirectory = "image/bus_str/";
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
					$str_img_path = $uploadDirectory.$newFileName;
				}
			}
		}
		else
		{
			$err_msg = "Your image file is not supportable format or size is too large, kindly follow the insructions properly! ";
		}
		

		$str_title = $_POST['str_title'];  
        $str_content =$_POST['str_content'];
		
		$data = getimagesize($str_img_path);
        $width = $data[0];
        $height = $data[1];
        if($height != "1380" && $width !="1600"){
          $err_msg = 'Your Given Height('.$height.'),Width('.$width.') Is Not Matching';
        }
      

       else if(!empty($str_title) && !empty($str_content) && !empty($str_img_path))
		{
			$selq1 = mysqli_query($dbcon1,"SELECT * FROM bus_str WHERE str_title='$str_title' and active_record=1") or die(mysqli_Error($dbcon1));

			if (mysqli_num_rows($selq1) > 0) 
			{
			$url_Error = "Sorry... Business strategy Name Already Exist";
			}
			else
			{
				$insq1 = mysqli_query($dbcon1,"insert into bus_str(str_title,str_content, str_img_path) values('$str_title','$str_content', '$str_img_path')") or die(mysqli_Error($dbcon1));
			if($insq1)
			{
				$post_msg = "Your Business strategy Added successfully";
			}
			else
			{
				$err_msg = "Your Business strategy adding Problems";
			}
		}

				
			}
			else
			{
				$err_msg = "You must be provide a valid Business strategy Details";
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
								<h4>Business Strategy</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="b_s_s.php">Business Strategy</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				
				<!-- Business strategy Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Business strategy</h4>
							<!--<p class="mb-30"></p>-->
						</div>
					</div>
				<form method="post" autocomplete="off"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="str_title" class="form-control">
							<small class="form-text text-muted">
							  Notes : Help notes
							</small>
						</div>
						<div class="html-editor mb-30">
					<h4 class="h4 text-blue">Content</h4>
					<textarea class="textarea_editor form-control border-radius-0" name="str_content" placeholder="Enter text ..."></textarea>
					<small class="form-text text-muted">
							  Notes : Help notes
							</small>
		                </div>
							<div class="form-group">
							<label>Image Uplaod</label>
							<input type="file"  name="uploadfile"  class="form-control-file form-control height-auto">
							<small class="form-text text-muted">
							  Notes : Image width:1600px and height:1380px.
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
							<h4 class="text-blue h4">Business strategy</h4>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="table-primary">
								<th scope="col">SL.No.</th>
								<th scope="col">Title</th>
								<th scope="col">Content</th>
								<th scope="col">Image</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>

				<?php
                   $query = "SELECT `id_bus_str`, `str_title`, `str_content`, `str_img_path`, `date_time`, `active_record` FROM `bus_str`";
                   $execute_qry = mysqli_query($dbcon1,$query)or die("Business Strategy Retriew Error!");          
                   $i=0;
				   while($team = mysqli_fetch_array($execute_qry)) {
				   $i++;
                   $id_bus_str = $team['id_bus_str'];
                   $str_title = $team['str_title'];
                   $str_content = $team['str_content'];
                   $str_img_path = $team['str_img_path'];
                   $active_record = $team['active_record'];
                ?>
							<tr>
								<th scope="row"><?php print $i ?></th>
								<td><?php print $str_title?></td>
								<td><?php print $str_content?></td>
								<td><img src="<?php print $str_img_path?>"  width="50px" height="50px"></td>
								<td><a href='?upd=<?php print $id_bus_str ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
									<a href='?id_fp=<?php print $id_bus_str ?>'><input type='hidden' name='po' value="<?php print $id_bus_str ?>"/><span class="badge badge-warning">Edit</span></a>&nbsp;
									<a href='?del=<?php print $id_bus_str ?>'><input type='hidden' name='dl' value="<?php print $id_bus_str ?>"/> <span class="badge badge-danger">Delete</span></a>
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
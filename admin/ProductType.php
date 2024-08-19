<?php
Error_reporting(0);
include("include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Admin</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-small.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Include DataTables JS -->
   
    
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
    <?php include 'header.php'; ?>
    <?php include 'menu.php'; ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Product Type Entry Form</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="ProductType.php">Product Type</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                if(isset($_GET['edit_id']) || isset($_GET['del_id'])){
                    $id = isset($_GET['edit_id']) ? $_GET['edit_id'] : $_GET['del_id'];
                    $sel_user = "SELECT * FROM product_type WHERE product_type_id = $id";
                    $res_sel_user = mysqli_query($dbcon1, $sel_user);
                    while($row = mysqli_fetch_assoc($res_sel_user)){
                        $name = $row['product_type_name'];
                    }
                }
                ?>
                <!-- Banner Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Product Type Details</h4>
                        </div>
                    </div>
                    <form id="supplierForm" method="post" autocomplete="off" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Product Type</label>
                            <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" class="form-control" maxlength="40" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                      
                        <a class="badge badge-primary" href="ProductType.php">Reset</a>
                        <button id="save" type="submit" name="<?php echo isset($_GET['edit_id']) ? 'update' : (isset($_GET['del_id']) ? 'delete' : 'category_submit'); ?>" value="submit" class="badge badge-success">Submit</button>
                    </form>
                </div>
                <?php
                $user_name="Admin";
                $ip_address="10.10";
                if(isset($_POST['category_submit'])){
                    $name = $_POST['name'];
                    

                    $insert_qry = "INSERT INTO product_type (product_type_name,isactive,ins_username,ins_ipaddress,ins_date) VALUES ('$name','1','$user_name','$ip_address',now())";
                    $res_insert_qry = mysqli_query($dbcon1, $insert_qry);

                    if($res_insert_qry){
                        echo "<script>alert('Product Type Added successfully'); window.location.href='ProductType.php';</script>";
                    } else {
                        echo "Check Insert Query";
                    }
                }

                if(isset($_POST['update'])){
                    $edit_id = $_GET['edit_id'];
                    $name = $_POST['name'];
                    

                    $update_qry = "UPDATE product_type SET product_type_name='$name',upd_username='$user_name',upd_ipaddress='$ip_address',upd_date=now() WHERE product_type_id='$edit_id'";
                    $res_update_qry = mysqli_query($dbcon1, $update_qry);

                    if($res_update_qry){
                        echo "<script>alert('Product Type Detail Updated successful'); window.location.href='ProductType.php';</script>";
                    } else {
                        echo "Check Update Query";
                    }
                }

                if(isset($_POST['delete'])){
                    $edit_id = $_GET['del_id'];

                    $delete_qry = "UPDATE product_type SET del_flag='Y',del_username='$user_name',del_ipaddress='$ip_address',del_date=now() WHERE product_type_id='$edit_id'";
                    $res_delete_qry = mysqli_query($dbcon1, $delete_qry);

                    if($res_delete_qry){
                        echo "<script>alert('Product Type Permanently Delete successful'); window.location.href='ProductType.php';</script>";
                    } else {
                        echo "Supplier Query check";
                    }
                }

                if(isset($_GET['upd'])){
                   
                 $id_fp=$_REQUEST['upd']; 
                    if(!empty($id_fp))
                    {
                      $query = "SELECT isactive FROM `product_type` WHERE  `product_type_id`=".$id_fp."";
                      $execute_qry = mysqli_query($dbcon1,$query)or die("Sustainability Box Icon Retriew Error!");          
                      while($team = mysqli_fetch_array($execute_qry)) {
                      $active_record = $team['isactive'];
                      if ($active_record =='0')
                      {
                        $insq1 = mysqli_query($dbcon1,"UPDATE `product_type` SET `isactive`='1' WHERE `product_type_id`=".$id_fp."") or die(mysqli_Error($dbcon1));
                        if($insq1)
                        {
                          echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="ProductType.php";</script>');
                         // $post_msg = "client Delete successfully";
                        }
                        else
                        {
                          echo('<script type="text/javascript">alert(" Activation Problems"); window.location="ProductType.php";</script>');
                          //$err_msg = "client Delete Problems";
                        }
                        }
                      else
                      {
                          $insq1 = mysqli_query($dbcon1,"UPDATE product_type SET isactive ='0'  WHERE `product_type_id`=".$id_fp."") or die(mysqli_Error($dbcon1));
                        if($insq1)
                        {
                          echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="ProductType.php";</script>');
                         // $post_msg = "client Delete successfully";
                        }
                        else
                        {
                          echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="ProductType.php";</script>');
                          //$err_msg = "client Delete Problems";
                        }
                      }
                      }
                    }
                  }  
                     
                ?>
                <!-- Backend Form End -->

                <!-- Data tables start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Product Type Details</h4>
                        </div>
                    </div>
                    <table id="supplierTable" class="display table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">SL.No.</th>
                                <th scope="col">Product Type Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM product_type where del_flag is null";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("category Retrieval Error!");
                            $i = 0;
                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $i++;
                                $product_type_id = $team['product_type_id'];
                                $product_type_name = $team['product_type_name'];
                                $active_record = $team['isactive'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $product_type_name; ?></td>
                                <td>
                                <a href='?upd=<?php echo $product_type_id; ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
                                    <a class="badge badge-warning" href="ProductType.php?edit_id=<?php echo $product_type_id; ?>">Edit</a>
                                    <a class="badge badge-danger" href="ProductType.php?del_id=<?php echo $product_type_id; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- Data tables end -->
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <!-- JS -->
  
   
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
		  $(document).ready(function() {
		$(document).on('click', '#save', function(event) {
		
            var name = $('#name').val();
			var mobile = $('#mobile').val();
            var gst = $('#gst').val();
            var bank = $('#bank').val();
            var address = $('#address').val();
		
			if(name==''){
				alert('Enter Category Name');
				$('#name').focus();
				return false;
			}
           
           
        });
	});
		</script>
    <script>
        $(document).ready(function() {
            $('#supplierTable').DataTable();
        });
		
        // Validate phone number function
        const inputField = document.querySelector('#mobile');
        inputField.addEventListener('keydown', (event) => {
            const allowedKeys = ['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete'];
            if (!/[0-9]/.test(event.key) && !allowedKeys.includes(event.key)) {
                event.preventDefault();
            }
        });

        // Validate name field function
        const nameField = document.querySelector('input[name="name"]');
        nameField.addEventListener('keydown', (event) => {
            const allowedKeys = ['Backspace', 'ArrowLeft', 'ArrowRight', 'Space', 'Delete'];
            if (!/[a-zA-Z]/.test(event.key) && !allowedKeys.includes(event.key)) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>

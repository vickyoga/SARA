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
                                <h4>Product Entry Form</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="ProductEntry.php">Product</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                if(isset($_GET['edit_id']) || isset($_GET['del_id'])){
                    $id = isset($_GET['edit_id']) ? $_GET['edit_id'] : $_GET['del_id'];
                    $sel_user = "SELECT * FROM product WHERE product_id = $id";
                    $res_sel_user = mysqli_query($dbcon1, $sel_user);
                    while($row = mysqli_fetch_assoc($res_sel_user)){

                        $edit_category_id = $row['category_id'];
                        $product_name = $row['product_name'];
                        $product_description = $row['product_description'];
                        $product_unit = $row['product_unit'];
                        $gst = $row['gst'];
                        
                        
                    }
                }
                ?>
                <!-- Banner Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Product Details</h4>
                        </div>
                    </div>
                    <form id="supplierForm" method="post" autocomplete="off" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Category Name</label>
                            <select id="category_id" name="category_id" class="form-control" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                            <option value="">Select Category Name</option> 
                            <?php
                            $query = "SELECT * FROM category WHERE del_flag IS NULL";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("Supplier Retrieval Error!");

                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $category_id = $team['category_id'];
                                $category_name = $team['category_name'];
                            ?>
                                <option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <script>
                            
                            document.getElementById("category_id").value = "<?php echo $edit_category_id; ?>";
                        </script>                
                        </div>
                        <div class="form-group">
                            <label>product name</label>
                            <input type="text" id="product_name" name="product_name" value="<?php echo isset($product_name) ? $product_name : ''; ?>" class="form-control" maxlength="10" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                       
                        <div class="form-group">
                            <label>product description</label>
                            <textarea class="form-control" id="product_description" name="product_description" rows="1" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>><?php echo isset($product_description) ? $product_description : ''; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>product unit</label>
                            <input type="text" id="product_unit" name="product_unit" value="<?php echo isset($product_unit) ? $product_unit : ''; ?>" class="form-control" maxlength="20" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>GST</label>
                            <input type="text" id="gst" name="gst" value="<?php echo isset($gst) ? $gst : ''; ?>" class="form-control" maxlength="20" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <a class="badge badge-primary" href="ProductEntry.php">Reset</a>
                        <button id="save" type="submit" name="<?php echo isset($_GET['edit_id']) ? 'update' : (isset($_GET['del_id']) ? 'delete' : 'product_submit'); ?>" value="submit" class="badge badge-success">Submit</button>
                    </form>
                </div>
                <?php
                $user_name="Admin";
                $ip_address="10.10";
                if(isset($_POST['product_submit'])){

                    $category_id = $_POST['category_id'];
                    $product_name = $_POST['product_name'];
                    $product_description = $_POST['product_description'];
                    $product_unit = $_POST['product_unit'];
                    $gst = $_POST['gst'];
                   

                    $insert_qry = "INSERT INTO product (category_id, product_name, product_description, product_unit,gst,isactive,ins_username,ins_ipaddress,ins_date) VALUES ('$category_id', '$product_name', '$product_description', '$product_unit', $gst,'1','$user_name','$ip_address',now())";
                    $res_insert_qry = mysqli_query($dbcon1, $insert_qry);

                    if($res_insert_qry){
                        echo "<script>alert('Product Added successfully'); window.location.href='ProductEntry.php';</script>";
                    } else {
                        echo "Check Insert Query";
                    }
                }

                if(isset($_POST['update'])){
                    $edit_id = $_GET['edit_id'];
                    $category_id = $_POST['category_id'];
                    $product_name = $_POST['product_name'];
                    $product_description = $_POST['product_description'];
                    $product_unit = $_POST['product_unit'];
                    $gst = $_POST['gst'];

                    $update_qry = "UPDATE product SET category_id='$category_id', product_name='$product_name', product_description='$product_description', product_unit='$product_unit',gst='$gst',upd_username='$user_name',upd_ipaddress='$ip_address',upd_date=now() WHERE product_id='$edit_id'";
                    $res_update_qry = mysqli_query($dbcon1, $update_qry);

                    if($res_update_qry){
                        echo "<script>alert('Product Detail Updated successful'); window.location.href='ProductEntry.php';</script>";
                    } else {
                        echo "Check Update Query";
                    }
                }

                if(isset($_POST['delete'])){
                    $edit_id = $_GET['del_id'];

                    $delete_qry = "UPDATE product SET del_flag='Y',del_username='$user_name',del_ipaddress='$ip_address',del_date=now() WHERE product_id='$edit_id'";
                    $res_delete_qry = mysqli_query($dbcon1, $delete_qry);

                    if($res_delete_qry){
                        echo "<script>alert('product Permanently Delete successful'); window.location.href='ProductEntry.php';</script>";
                    } else {
                        echo "Supplier Query check";
                    }
                }

                if(isset($_GET['upd'])){
                   
                 $id_fp=$_REQUEST['upd']; 
                    if(!empty($id_fp))
                    {
                      $query = "SELECT isactive FROM `product` WHERE  `product_id`=".$id_fp."";
                      $execute_qry = mysqli_query($dbcon1,$query)or die("Sustainability Box Icon Retriew Error!");          
                      while($team = mysqli_fetch_array($execute_qry)) {
                      $active_record = $team['isactive'];
                      if ($active_record =='0')
                      {
                        $insq1 = mysqli_query($dbcon1,"UPDATE `product` SET `isactive`='1' WHERE `product_id`=".$id_fp."") or die(mysqli_Error($dbcon1));
                        if($insq1)
                        {
                          echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="ProductEntry.php";</script>');
                         // $post_msg = "client Delete successfully";
                        }
                        else
                        {
                          echo('<script type="text/javascript">alert(" Activation Problems"); window.location="ProductEntry.php";</script>');
                          //$err_msg = "client Delete Problems";
                        }
                        }
                      else
                      {
                          $insq1 = mysqli_query($dbcon1,"UPDATE product SET isactive ='0'  WHERE `product_id`=".$id_fp."") or die(mysqli_Error($dbcon1));
                        if($insq1)
                        {
                          echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="ProductEntry.php";</script>');
                         // $post_msg = "client Delete successfully";
                        }
                        else
                        {
                          echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="ProductEntry.php";</script>');
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
                            <h4 class="text-blue h4">product Details</h4>
                        </div>
                    </div>
                    <table id="supplierTable" class="display table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">SL.No.</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product DesCription</th>
                                <th scope="col">product unit</th>
                                <th scope="col">GST</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select product_id,category_name,product_name,product_description,product_unit,gst,a.isactive from (SELECT * FROM product where del_flag is null)as a
                                        left join
                                        (select * from category where del_flag is null)as b on a.category_id=b.category_id";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("Supplier Retrieval Error!");
                            $i = 0;
                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $i++;
                                $product_id = $team['product_id'];
                                $category_name = $team['category_name'];
                                $product_name = $team['product_name'];
                                $product_description = $team['product_description'];
                                $product_unit = $team['product_unit'];
                                $gst = $team['gst'];
                                $active_record = $team['isactive'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $category_name; ?></td>
                                <td><?php echo $product_name; ?></td>
                                <td><?php echo $product_description; ?></td>
                                <td><?php echo $product_unit; ?></td>
                                <td><?php echo $gst; ?></td>
                              
                                <td>
                                <a href='?upd=<?php echo $product_id; ?>'><?php if($active_record =='0') { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
                                    <a class="badge badge-warning" href="ProductEntry.php?edit_id=<?php echo $product_id; ?>">Edit</a>
                                    <a class="badge badge-danger" href="ProductEntry.php?del_id=<?php echo $product_id; ?>">Delete</a>
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
		
            var category_id = $('#category_id').val();
			var product_name = $('#product_name').val();
            var product_description = $('#product_description').val();
            var product_unit = $('#product_unit').val();
          
		
			if(category_id==''){
				alert('Select category');
				$('#category_id').focus();
				return false;
			}
			if(product_name==''){
				alert('Enter product name');
				$('#product_name').focus();
				return false;
			}
			if(product_description==''){
				alert('Enter product description');
				$('#product_description').focus();
				return false;
			}
			if(product_unit==''){
				alert('Enter product unit');
				$('#product_unit').focus();
				return false;
			}
            if(gst==''){
				alert('Enter gst');
				$('#product_unit').focus();
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
        const inputField = document.querySelector('#product_unit');
        inputField.addEventListener('keydown', (event) => {
            const allowedKeys = ['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete'];
            if (!/[0-9]/.test(event.key) && !allowedKeys.includes(event.key)) {
                event.preventDefault();
            }
        });
        const inputField_1 = document.querySelector('#gst');
        inputField_1.addEventListener('keydown', (event) => {
            const allowedKeys = ['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete'];
            if (!/[0-9]/.test(event.key) && !allowedKeys.includes(event.key)) {
                event.preventDefault();
            }
        });

      
    </script>
</body>
</html>

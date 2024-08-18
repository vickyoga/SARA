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
                                <h4>In-ward Entry Form</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="In_ward.php">IN-Ward</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                if(isset($_GET['edit_id']) || isset($_GET['del_id'])){
                    $id = isset($_GET['edit_id']) ? $_GET['edit_id'] : $_GET['del_id'];
                    $sel_user = "SELECT * FROM in_ward WHERE in_ward_id = $id";
                    $res_sel_user = mysqli_query($dbcon1, $sel_user);
                    while($row = mysqli_fetch_assoc($res_sel_user)){
                        $edit_in_ward_id = $row['in_ward_id'];
                        $in_ward_date = $row['in_ward_date'];
                        $edit_supplier_id = $row['supplier_id'];
                        $edit_product_id = $row['product_id'];
                        $edit_category_id = $row['category_id'];
                        $unit = $row['unit'];
                        $gst = $row['gst'];
                        $qty = $row['qty'];
                        $per_qty_amt = $row['per_qty_amt'];
                        $total_Amount = $row['total_Amount'];
                        $total_gst_Amount = $row['total_gst_Amount'];
                    }
                }
                ?>
                <!-- Banner Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">IN-Ward Process</h4>
                        </div>
                    </div>
                    <form id="supplierForm" method="post" autocomplete="off" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>IN-Ward date</label>
                            <input type="date" id="in_ward_date" name="in_ward_date" value="<?php echo isset($in_ward_date) ? $in_ward_date : ''; ?>" class="form-control" maxlength="40" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>Supplier Name</label>
                            <select id="supplier_id" name="supplier_id" class="form-control" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                            <option value="">Select supplier Name</option> 
                            <?php
                            $query = "SELECT * FROM supplier WHERE del_flag IS NULL";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("Supplier Retrieval Error!");

                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $supplier_id = $team['supplier_id'];
                                $supplier_name = $team['name'];
                            ?>
                                <option value="<?php echo $supplier_id; ?>"><?php echo $supplier_name; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <script>
                            
                            document.getElementById("supplier_id").value = "<?php echo $edit_supplier_id; ?>";
                        </script>                
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <select id="product_id" name="product_id" class="form-control" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                            <option value="">Select product Name</option> 
                            <?php
                            $query = "SELECT * FROM product WHERE del_flag IS NULL";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("product Retrieval Error!");

                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $product_id = $team['product_id'];
                                $product_name = $team['product_name'];
                            ?>
                                <option value="<?php echo $product_id; ?>"><?php echo $product_name; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <script>
                            
                            document.getElementById("product_id").value = "<?php echo $edit_product_id; ?>";
                        </script>                
                        </div>
                        <div class="form-group">
                            <label>Category Name</label>
                            <select id="category_id" name="category_id" class="form-control" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                            <option value="">Select category Name</option> 
                            <?php
                            $query = "SELECT * FROM category WHERE del_flag IS NULL";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("category_id Retrieval Error!");

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
                            <label>Unit</label>
                            <input type="text" id="unit" name="unit" value="<?php echo isset($unit) ? $unit : ''; ?>" class="form-control" maxlength="15" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>

                        <div class="form-group">
                            <label>gst</label>
                            <input type="text" id="gst" name="gst" value="<?php echo isset($gst) ? $gst : ''; ?>" class="form-control" maxlength="15" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>qty</label>
                            <input type="text" id="qty" name="qty" value="<?php echo isset($qty) ? $qty : ''; ?>" class="form-control" maxlength="15" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>per qty amount Entry</label>
                            <input type="text" id="per_qty_amt" name="per_qty_amt" value="<?php echo isset($per_qty_amt) ? $per_qty_amt : ''; ?>" class="form-control" maxlength="15" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>Total Amount</label>
                            <input type="text" id="total_Amount" name="total_Amount" value="<?php echo isset($total_Amount) ? $total_Amount : ''; ?>" class="form-control" maxlength="15" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>Total Amount</label>
                            <input type="text" id="total_gst_Amount" name="total_gst_Amount"  value="<?php echo isset($total_gst_Amount) ? $total_gst_Amount : ''; ?>" class="form-control" maxlength="15" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <a class="badge badge-primary" href="In_ward.php">Reset</a>
                        <button id="save" type="submit" name="<?php echo isset($_GET['edit_id']) ? 'update' : (isset($_GET['del_id']) ? 'delete' : 'in_ward_submit'); ?>" value="submit" class="badge badge-success">Submit</button>
                    </form>
                </div>
                <?php
                $user_name="Admin";
                $ip_address="10.10";
                if(isset($_POST['in_ward_submit'])){     

                    $in_ward_date = $_POST['in_ward_date'];
                    $supplier_id = $_POST['supplier_id'];
                    $product_id = $_POST['product_id'];
                    $category_id = $_POST['category_id'];
                    $unit = $_POST['unit'];
                    $gst = $_POST['gst'];
                    $qty = $_POST['qty'];
                    $per_qty_amt = $_POST['per_qty_amt'];
                    $total_Amount = $_POST['total_Amount'];
                    $total_gst_Amount = $_POST['total_gst_Amount'];

                    $insert_qry = "INSERT INTO in_ward (in_ward_date,supplier_id, product_id, category_id, unit, gst,qty,per_qty_amt,total_Amount,total_gst_Amount,isactive,ins_username,ins_ipaddress,ins_date) VALUES ('$in_ward_date','$supplier_id', '$product_id', '$category_id', '$unit','$gst','$qty','$per_qty_amt','$total_Amount','$total_gst_Amount','1','$user_name','$ip_address',now())";
                    $res_insert_qry = mysqli_query($dbcon1, $insert_qry);

                    if($res_insert_qry){
                        echo "<script>alert('In Ward successfully'); window.location.href='In_ward.php';</script>";
                    } else {
                        echo "Check Insert Query";
                    }
                }

                if(isset($_POST['update'])){
                    $edit_id = $_GET['edit_id'];
                    $in_ward_date = $_POST['in_ward_date'];
                    $supplier_id = $_POST['supplier_id'];
                    $product_id = $_POST['product_id'];
                    $category_id = $_POST['category_id'];
                    $unit = $_POST['unit'];
                    $gst = $_POST['gst'];
                    $qty = $_POST['qty'];
                    $per_qty_amt = $_POST['per_qty_amt'];
                    $total_Amount = $_POST['total_Amount'];
                    $total_gst_Amount = $_POST['total_gst_Amount'];

                    $update_qry = "UPDATE in_ward 
                    SET 
                        in_ward_date = '$in_ward_date',
                        supplier_id = '$supplier_id',
                        product_id = '$product_id',
                        category_id = '$category_id',
                        unit = '$unit',
                        gst = '$gst',
                        qty = '$qty',
                        per_qty_amt = '$per_qty_amt',
                        total_Amount = '$total_Amount',
                        total_gst_Amount = '$total_gst_Amount',
                        isactive = '1',
                        upd_username = '$user_name',
                        upd_ipaddress = '$ip_address',
                        upd_date = now()
                    WHERE 
                        in_ward_id = '$edit_id'";
     
                    $res_update_qry = mysqli_query($dbcon1, $update_qry);

                    if($res_update_qry){
                        echo "<script>alert('Inward Updated successful'); window.location.href='In_ward.php';</script>";
                    } else {
                        echo "Check Update Query";
                    }
                }

                if(isset($_POST['delete'])){
                    $edit_id = $_GET['del_id'];

                    $delete_qry = "UPDATE in_ward SET del_flag='Y',del_username='$user_name',del_ipaddress='$ip_address',del_date=now() WHERE in_ward_id='$edit_id'";
                    $res_delete_qry = mysqli_query($dbcon1, $delete_qry);

                    if($res_delete_qry){
                        echo "<script>alert('Inward Permanently Delete successful'); window.location.href='In_ward.php';</script>";
                    } else {
                        echo "Supplier Query check";
                    }
                }

                if(isset($_GET['upd'])){
                   
                 $id_fp=$_REQUEST['upd']; 
                    if(!empty($id_fp))
                    {
                      $query = "SELECT isactive FROM `in_ward` WHERE  `in_ward_id`=".$id_fp."";
                      $execute_qry = mysqli_query($dbcon1,$query)or die("Sustainability Box Icon Retriew Error!");          
                      while($team = mysqli_fetch_array($execute_qry)) {
                      $active_record = $team['isactive'];
                      if ($active_record =='0')
                      {
                        $insq1 = mysqli_query($dbcon1,"UPDATE `in_ward` SET `isactive`='1' WHERE `in_ward_id`=".$id_fp."") or die(mysqli_Error($dbcon1));
                        if($insq1)
                        {
                          echo('<script type="text/javascript">alert(" Activated Sucessfully"); window.location="In_ward.php";</script>');
                         // $post_msg = "client Delete successfully";
                        }
                        else
                        {
                          echo('<script type="text/javascript">alert(" Activation Problems"); window.location="In_ward.php";</script>');
                          //$err_msg = "client Delete Problems";
                        }
                        }
                      else
                      {
                          $insq1 = mysqli_query($dbcon1,"UPDATE in_ward SET isactive ='0'  WHERE `in_ward_id`=".$id_fp."") or die(mysqli_Error($dbcon1));
                        if($insq1)
                        {
                          echo('<script type="text/javascript">alert(" UnActivated Sucessfully"); window.location="In_ward.php";</script>');
                         // $post_msg = "client Delete successfully";
                        }
                        else
                        {
                          echo('<script type="text/javascript">alert("UnActivated Problems"); window.location="In_ward.php";</script>');
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
                            <h4 class="text-blue h4">inWard Details</h4>
                        </div>
                    </div>
                    <table id="supplierTable" class="display table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">SL.No.</th>
                                <th scope="col">per_qty_amt</th>
                                <th scope="col">total_Amount</th>
                                <th scope="col">total_gst_Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM in_ward where del_flag is null";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("in_ward Retrieval Error!");
                            $i = 0;
                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $i++;
                                $in_ward_id = $team['in_ward_id'];
                                $in_ward_date = $team['in_ward_date'];
                                $supplier_id = $team['supplier_id'];
                                $product_id = $team['product_id'];
                                $category_id = $team['category_id'];
                                $unit = $team['unit'];
                                $gst = $team['gst'];
                                $qty = $team['qty'];
                                $per_qty_amt = $team['per_qty_amt'];
                                $total_Amount = $team['total_Amount'];
                                $total_gst_Amount = $team['total_gst_Amount'];
                                $active_record = $team['isactive'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $per_qty_amt; ?></td>
                                <td><?php echo $total_Amount; ?></td>
                                <td><?php echo $total_gst_Amount; ?></td>
                                <td>
                                <a href='?upd=<?php echo $in_ward_id; ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
                                    <a class="badge badge-warning" href="In_ward.php?edit_id=<?php echo $in_ward_id; ?>">Edit</a>
                                    <a class="badge badge-danger" href="In_ward.php?del_id=<?php echo $in_ward_id; ?>">Delete</a>
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
				alert('Enter Supplier Name');
				$('#name').focus();
				return false;
			}
			if(mobile==''){
				alert('Enter Mobile Number');
				$('#mobile').focus();
				return false;
			}
			if(gst==''){
				alert('Enter GST Number');
				$('#gst').focus();
				return false;
			}
			if(bank==''){
				alert('Enter Bank Details');
				$('#bank').focus();
				return false;
			}
			if(address==''){
				alert('Enter Address');
				$('#address').focus();
				return false;
			}
           
            if (name === '' || mobile === '' || gst === '' || bank === '' || address === '') {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
	});
		</script>
    <script>
        $(document).ready(function() {
            $('#supplierTable').DataTable();
        });
		
        // Validate phone number function
        const inputField = document.querySelector('#unit');
        inputField.addEventListener('keydown', (event) => {
            const allowedKeys = ['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete'];
            if (!/[0-9]/.test(event.key) && !allowedKeys.includes(event.key)) {
                event.preventDefault();
            }
        });

      

        $('#product_id').change(function(event) {
    event.preventDefault(); // Prevent the default form submission

    var product_id = $('#product_id').val();

    $.ajax({
        url: "in_ward_ajax.php",
        method: "POST",
        data: { product_id: product_id },
        dataType: "json",
        success: function(data) {
            if (data.status === 'success') {
                // Update the category dropdown with the received HTML options
                $('#category_id').html(data.options);
                $('#unit').val(data.unit);
                $('#gst').val(data.gst);
            } 

        }
    });
});
    </script>
    	<script>
  $(document).ready(function() {
    function calculateSum() {
        // Get quantity and price per quantity
        var qty = Math.ceil(document.getElementById('qty').value) || 0;
        var per_qty_amt = parseFloat(document.getElementById("per_qty_amt").value) || 0;
        
        // Calculate the base price
        var basePrice = qty * per_qty_amt;
        
        // Get GST rate (you need to define or retrieve this value)
        var gstRate = parseFloat(document.getElementById("gst").value) || 0;

        // Function to calculate GST and total price
        function calculateGST(basePrice, gstRate) {
            var gstAmount = (basePrice * gstRate) / 100;
            var totalPrice = basePrice + gstAmount;
            return {
                gstAmount: gstAmount,
                totalPrice: totalPrice
            };
        }

        // Calculate GST and total amount
        var result = calculateGST(basePrice, gstRate);

        // Set the final value (total amount including GST) in the DOM
        document.getElementById('total_Amount').value = result.totalPrice.toFixed(2); // Assuming there's an input field with id 'total_Amount'

        // Optionally, if you want to display the GST amount separately:
        document.getElementById('total_gst_Amount').value = result.gstAmount.toFixed(2); // Assuming there's an input field with id 'gst_Amount'
    }

    // Attach the calculateSum function to the input event for both input fields
    $('#qty, #per_qty_amt, #gst').on('input', calculateSum);
});

</script>
</body>
</html>

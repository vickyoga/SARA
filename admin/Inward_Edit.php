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
                                <h4>In Ward Edit Form</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="Inward_Edit.php">Unit</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                if(isset($_GET['edit_id']) || isset($_GET['del_id'])){
                    $id = isset($_GET['edit_id']) ? $_GET['edit_id'] : $_GET['del_id'];
                    $sel_user = "SELECT * FROM unit WHERE unit_id = $id";
                    $res_sel_user = mysqli_query($dbcon1, $sel_user);
                    while($row = mysqli_fetch_assoc($res_sel_user)){
                        $unit = $row['unit'];
                        
                    }
                }
                ?>
                <!-- Banner Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">IN Ward Details</h4>
                        </div>
                    </div>
                    <form id="supplierForm" method="post" autocomplete="off" enctype="multipart/form-data">                    
                        <div class="form-group">
                            <label>IN WARD From Date</label>
                            <input type="date" id="in_ward_from_date" name="in_ward_from_date" value="<?php echo isset($unit) ? $unit : ''; ?>" class="form-control" maxlength="10" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>IN WARD To Date</label>
                            <input type="date" id="in_ward_to_date" name="in_ward_to_date" value="<?php echo isset($unit) ? $unit : ''; ?>" class="form-control" maxlength="10" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
                        </div>
                        <div class="form-group">
                            <label>Supplier Name</label>
                            <select id="supplier_id" name="supplier_id" class="form-control custom-size" <?php echo isset($_GET['del_id']) ? 'disabled' : ''; ?>>
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
                        
                        
                        <button id="save" type="submit" name="<?php echo isset($_GET['edit_id']) ? 'update' : (isset($_GET['del_id']) ? 'delete' : 'inward_edit_submit'); ?>" value="submit" class="badge badge-success">Show</button>
                    </form>
                </div>
              
                <!-- Backend Form End -->

                <!-- Data tables start -->
                <?php
                            if(isset($_POST['inward_edit_submit'])){
                               
                                ?>
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">IN Ward Details</h4>
                        </div>
                    </div>
                  
                    <table id="supplierTable" class="display table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">SL.No.</th>
                                <th scope="col">unit </th>
                                <th scope="col">Action </th>
                               
                            </tr>
                        </thead>
                      
                                 <tbody>
                           <?php

                         $in_ward_from_date =  $_POST['in_ward_from_date'];

                         $in_ward_to_date =  $_POST['in_ward_to_date'];

                         $supplier_id =  $_POST['supplier_id'];

                            $query = "SELECT * FROM in_ward where supplier_id=$supplier_id and  in_ward_date BETWEEN  '$in_ward_from_date' AND '$in_ward_to_date' and  del_flag is null";
                            $execute_qry = mysqli_query($dbcon1, $query) or die("inward Retrieval Error!");
                            $i = 0;
                            while ($team = mysqli_fetch_array($execute_qry)) {
                                $i++;
                                $in_ward_code = $team['in_ward_code'];
                                $in_ward_date = $team['in_ward_date'];
                                $supplier_id = $team['supplier_id'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $in_ward_code; ?></td>
                              
                                <td>
                                <a href='?upd=<?php echo $unit_id; ?>'><?php if($active_record == 0) { ?><span class="badge badge-danger">InActive</span><?php } else{ ?><span class="badge badge-success">Active</span><?php } ?></a>&nbsp; 
                                    <a class="badge badge-warning" href="Inward_Edit.php?edit_id=<?php echo $unit_id; ?>">Edit</a>
                                    <a class="badge badge-danger" href="Inward_Edit.php?del_id=<?php echo $unit_id; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                             
                       
                    </table>
                  
                </div>
                <?php
                            }
                            ?>
                <!-- Data tables end -->
            </div>
            <?php //include 'footer.php'; ?>
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
		
            var unit = $('#unit').val();
			
		
			if(unit==''){
				alert('Enter unit');
				$('#unit').focus();
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

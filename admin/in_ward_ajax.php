<?php
session_start();
include("include/config.php");
header('Content-Type: application/json');

$response = ["status" => "error", "options" => ""]; // Default response

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    $options = '<option value="">Select category Name</option>'; 

    $query = "SELECT a.product_unit,a.gst,b.category_id, b.category_name 
              FROM (SELECT * FROM product WHERE del_flag IS NULL) AS a
              LEFT JOIN (SELECT * FROM category WHERE del_flag IS NULL) AS b 
              ON a.category_id = b.category_id
              WHERE a.product_id = '$product_id'"; // Filter by product_id

    $execute_qry = mysqli_query($dbcon1, $query) or die("category_id Retrieval Error!");

    while ($team = mysqli_fetch_array($execute_qry)) {
        $unit = $team['product_unit'];
        $gst = $team['gst'];
        $category_id = $team['category_id'];
        $category_name = $team['category_name'];
        $options .= '<option value="' . $category_id . '">' . $category_name . '</option>';
    }

    $response = ["status" => "success", "options" => $options,"unit"=>$unit,"gst"=>$gst];
}

echo json_encode($response);
?>

<?php
include("db_connect.php");


// FETCH DATA FROM THE TABLE
$edit_query ="SELECT * FROM `".$assets_table."`  WHERE `id` =".$_GET['edit'].";";
$edit_query = mysql_query($edit_query);
while($rows = mysql_fetch_array($edit_query)) {
	$asset_det['asset_name'] = $rows['name'];
	$asset_det['asset_desc'] = $rows['description'];
	$asset_det['asset_loc'] = $rows['location'];
	$asset_det['asset_employee']= $rows['employee'];
	$asset_det['asset_status']= $rows['status'];
	$asset_det['asset_expiry']= $rows['expiry'];
}


?>
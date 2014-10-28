<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	if(isset($_GET['edit'])){
		$Edit_mode = true;
		$edit_id = $_GET['edit'];
	}
	
	if(isset($_POST['update']))
	{
		if(isset($_POST['asset_name']) && $_POST['asset_name'] != ''){
			if(isset($_POST['asset_expiry'])){
				$expiry_date  = date( "Y-m-d H:i:s", strtotime( $_POST['asset_expiry']) );
			}
 			
			  $mysql_query = "UPDATE `".$assets_table."` SET  `name`='".$_POST["asset_name"]."',`description`='".$_POST["asset_desc"]."',`location`='".$_POST["asset_location"]."',`employee`='".$_POST["assigned_employee"]."',`status`='".$_POST["asset_status"]."',`expiry`='".$expiry_date."' WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['asset_name']) && $_POST['asset_name'] != ''){
 		if(isset($_POST['asset_expiry'])){
 			$expiry_date  = date( "Y-m-d H:i:s", strtotime( $_POST['asset_expiry']) );
 		}
 		  $mysql_query = "INSERT INTO `".$assets_table."`( `name`, `description`, `location`, `employee`, `status`, `expiry`) VALUES
				('".$_POST["asset_name"]."','".$_POST["asset_desc"]."','". $_POST["asset_location"]."','".$_POST["assigned_employee"]."','".$_POST["asset_status"]."','".$expiry_date ."')";
 		  mysql_query($mysql_query);
 		  ?>
 		  
 		  <script  type="text/javascript">
				window.location.href = "assets_monitor.php"
 		  </script>
 		  
 		  <?php 
 		  
 	}
 	}
	 
	
// EDIT QUERY 
		if($Edit_mode){
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
		}
	
	?>

<div class="col-md-9 col-lg-10" id="content">
<div class="row">
<div class="canvas col-md-12" id="main-canvas">
<form accept-charset="UTF-8" action="" class="form-horizontal" id="purchase-main-form" method="post">
<div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg="></div><input id="current_time" name="current_time" type="hidden" value="1413815433">
<section class="form col-sm-9" id="purchase">
<div class="row">
<div class="page-header">

<?php  
if($Edit_mode)
	echo '<h1>Edit Asset</h1>';
else
	echo '<h1>New Asset</h1>'; 
	
?>

</div>
</div>
<div class="row">
<div class="page-content col-sm-12">
<div class="row">
<div class="col-md-12">
<div class="errors-placeholder">
</div>

</div>
</div>
<div class="row">

</div>
<div class="row">
<div class="subject form-group col-sm-12">
<label class="sr-only" for="purchase_subject">Subject</label>
<input class="form-control" id="purchase_subject" name="asset_name" placeholder="Asset Name" value="<?php echo (isset($asset_det['asset_name'])?$asset_det['asset_name'] : '')?>"  type="text">
</div>
</div>
<div class="row">
<div class="remark form-group col-sm-12">
<label class="sr-only" for="purchase_remark">Remark</label>
<textarea class="form-control" id="purchase_remark" name="asset_desc" placeholder="Asset Description.  

" rows="4">
<?php echo (isset($asset_det['asset_desc'])?$asset_det['asset_desc'] : '')?> 
</textarea>
</div>


</div>
<div class="editable-purchae-items">
<div class="row items-to-purchase">
<div class="page-header">
 </div>
</div>
<div class="row" id="purchase-items">
<div class="col-sm-12">
<div class="fields"><div class="purchase-item row">

 <div class="form-group col-sm-4 item-name"  style="margin-right:9px;">
<div class="ship-to-location">
<label for="purchase_Ship to Location">Asset Status</label>
<br>	
<select class="form-control" id="purchase_location_id" name="asset_status" >
<option value="">- Asset Status -</option>
<option value="1"     <?php echo ($asset_det['asset_status'] == 'inactive' ? 'selected="selected"' : '')?> >Inactive</option> 
<option value="2"  <?php echo ($asset_det['asset_status'] == 'active' ? 'selected="selected"' : '')?> >Active</option> 
<option value="3"   <?php echo ($asset_det['asset_status'] == 'under_maintenance' ? 'selected="selected"' : '')?> >Under Maintenance</option> 
</select>
 
</div>
</div>


 <div class="form-group col-sm-4 item-qty">
<div class="ship-to-location">
<label for="purchase_Ship to Location">Asset Location</label>
<br>	
<!-- <select class="form-control" id="purchase_location_id" name="asset_location" onchange="loadLocation()"><option value="">- Location -</option>
<option value="Pettai">Pettai</option></select> -->
<input class="form-control"  name="asset_location" placeholder="Asset location" value="<?php echo (isset($asset_det['asset_loc'])?$asset_det['asset_loc'] : '')?>"  type="text">
 
</div>
<!-- <label class="sr-only" for="purchase_purchase_items_attributes_0_qty">Qty</label>
<input class="form-control purchase_item_qty" id="purchase_purchase_items_attributes_0_qty" name="purchase[purchase_items_attributes][0][qty]" placeholder="Qty (e.g. 8 gallons)" type="text"> -->
</div>
 
</div>
</div></div>
<!-- <div class="navigator-purchase-items">
<a class="add_nested_fields" data-association="purchase_items" data-blueprint-id="purchase_items_fields_blueprint" data-target="#purchase-items .col-sm-12" href="javascript:void(0)">Add more</a>
</div> -->
</div>
</div>

</div>
</div>
<!-- <div class="row">
<div class="page-header">
<h3>Associated Vendors</h3>
<div class="add_vendor_link"><a href="javascript:void(0)" onclick="showVendorModal()">Add Vendor</a></div>
</div> 
</div>-->
<div class="row">
<!-- 
<div id="purchase-vendors">
<div class="page-content" id="no-vendors">
<div class="no-data">
No vendors
</div>
</div>
</div>
 -->

</div>


</section>

<section class="action_button col-sm-3" id="sidebar">
<br>

<!-- <button class="btn btn-default" id="save_as_draft" name="commit" value="Save Request">Save Asset
 </button> -->
 



<div class="row">
<div class="page-content">
 


 
<br>
<div class="expected-shipment-date">
<label for="purchase_Expected Shipment Date">Expiry date</label>
<br>
<?php 
if(isset($asset_det['asset_expiry'])){
$mysqldate = strtotime($asset_det['asset_expiry']);
  $phpdate= date( 'Y/m/d', $mysqldate );
 }
?>


<input class="form-control" id="purchase_expected_shipment_at" name="asset_expiry"   value="<?php  echo ($phpdate != '' ? $phpdate :'' )?>"type="text">
</div>
<br>
<div class="approver">
<label for="purchase_approver_id">Assigned Employee</label>
<br>
<!-- <select class="form-control" id="purchase_approver_id" name="assigned_employee"><option value="">- Assigned Employee-</option>
<option value="Mohammed Talha">Mohammed Talha</option></select> -->
<input class="form-control"   name="assigned_employee"   value="<?php echo (isset($asset_det['asset_employee'])?$asset_det['asset_employee'] : '')?>"  type="text">
</div>
<!--  <div class="page-header">
<h3>Followers</h3>
<p>(Followers get email updates)</p>
<a href="javascript:void(0)" onclick="showFollowerModal()">Add Follower</a>
</div>
<div class="page-content">
<div id="purchase-followers">
<div class="no-data" id="no-followers">
No followers
</div>

</div>
</div>

-->
</div>
</div>
</section>
<div data-blueprint="<div class=&quot;fields&quot;><div class='purchase-item row'>
<input id=&quot;purchase_purchase_items_attributes_new_purchase_items_id&quot; name=&quot;purchase[purchase_items_attributes][new_purchase_items][id]&quot; type=&quot;hidden&quot; />
<div class='form-group col-sm-6 item-name'>
<label class=&quot;sr-only&quot; for=&quot;purchase_purchase_items_attributes_new_purchase_items_name&quot;>Name</label>
<textarea class=&quot;form-control purchase_item_name&quot; id=&quot;purchase_purchase_items_attributes_new_purchase_items_name&quot; name=&quot;purchase[purchase_items_attributes][new_purchase_items][name]&quot; placeholder=&quot;e.g. blue paint&quot;>&amp;#x000A;</textarea>
</div>
<div class='form-group col-sm-4 item-qty'>
<label class=&quot;sr-only&quot; for=&quot;purchase_purchase_items_attributes_new_purchase_items_qty&quot;>Qty</label>
<input class=&quot;form-control purchase_item_qty&quot; id=&quot;purchase_purchase_items_attributes_new_purchase_items_qty&quot; name=&quot;purchase[purchase_items_attributes][new_purchase_items][qty]&quot; placeholder=&quot;Qty (e.g. 8 gallons)&quot; type=&quot;text&quot; />
</div>
<div class='form-group col-sm-2 item-commands'>
<input id=&quot;purchase_purchase_items_attributes_new_purchase_items__destroy&quot; name=&quot;purchase[purchase_items_attributes][new_purchase_items][_destroy]&quot; type=&quot;hidden&quot; value=&quot;false&quot; /><a class=&quot;remove_nested_fields&quot; data-association=&quot;purchase_items&quot; href=&quot;javascript:void(0)&quot;>Remove</a>
</div>
</div>
</div>" id="purchase_items_fields_blueprint" style="display: none"></div>
<div class="clear"></div>
<!-- <section class="comments-activities-section col-md-12">
<div id="comment-and-log-list">
<div class="row">
<div class="page-header">
<h2>Comments</h2>
<h2 class="pull-right">Activity Log</h2>
</div>
</div>
<div class="row">
<div class="col-md-12" id="comments_and_activities">
<div class="blank_content">
<em>There are no comments yet</em>
</div>
</div>
</div>

</div>
</section> -->


<?php  
if($Edit_mode){
	echo '<input class="btn btn-default"  type="submit" name="update" value="Update Asset"  style="background-color: #ffe400;">';
	
	}
else{
	echo '<input class="btn btn-default"  type="submit"  name="save"  value="Save Asset"  style="background-color: #ffe400;">';
	}
	
?>




</div>
</div>
</div>
</form>

	<?php   include_once('footer-pop.php'); ?>
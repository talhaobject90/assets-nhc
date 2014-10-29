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
 			
			      $mysql_query = "UPDATE `".$assets_table."` SET 
			       `name`='".$_POST["asset_name"]."',
			       	`description`='".$_POST["asset_desc"]."',
			       	`location`='".$_POST["asset_location"]."',
			       	`custodian`='".$_POST["custodian"]."',
			       	`status`='".$_POST["asset_status"]."',
			       	 `accident_history`='".$_POST["accident_history"]."', 
			       	 `violation_history`='".$_POST["violation_history"]."', 
			       	 `istemara_expiry`='".$_POST["istemara_expiry"]."',
			         `insurance_expiry`='".$_POST["insurance_expiry"]."',
			         `preventive_maintenance`='".$_POST["preventive_maintenance"]."',
			         `tuv_sticker`='".$_POST["tuv_sticker"]."',
			         `client_sticker`='".$_POST["client_sticker"]."',
			         `mot_license_expiry`='".$_POST["mot_license_expiry"]."' 
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['asset_name']) && $_POST['asset_name'] != ''){
 		
 		
 		
 		       $mysql_query = "INSERT INTO `".$assets_table."`
 		       		( `name`, 
 		       		`description`, 
 		       		`location`, 
 		       		`custodian`,
 		       		 `status`,  
 		       		`accident_history`,
 		       		 `violation_history` ,
 		       		 `istemara_expiry` ,
 		       		`insurance_expiry`, 
 		       		`preventive_maintenance` , 
 		       		`tuv_sticker` ,`client_sticker`,
 		       		 `mot_license_expiry`    
				 ) VALUES
				('".$_POST["asset_name"]."',
				'".$_POST["asset_desc"]."',
				'". $_POST["asset_location"]."' ,
				'".$_POST["custodian"]."' ,
				'".$_POST["asset_status"]."' ,
				'".$_POST["accident_history"]."',
				'".$_POST["violation_history"]."',
				'".$_POST["istemara_expiry"]."',
				'".$_POST["insurance_expiry"]."' ,
				'".$_POST["preventive_maintenance"]."',
				'".$_POST["tuv_sticker"]."',
				'".$_POST["client_sticker"]."',
				'".$_POST["mot_license_expiry"]."')";
 		       
 		       
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
			$asset_det['asset_id'] =  trim($rows['id']);
			$asset_det['asset_name'] = trim($rows['name']);
			$asset_det['asset_desc'] = trim($rows['description']);
			$asset_det['asset_loc'] =  trim($rows['location']);
			$asset_det['custodian']= trim($rows['custodian']);
			$asset_det['asset_status']= trim($rows['status']);
			$asset_det['asset_expiry']= trim($rows['expiry']);
			 $asset_det['istemara_expiry'] = trim($rows['istemara_expiry']);
			$asset_det['insurance_expiry'] = trim($rows['insurance_expiry']);
			$asset_det['preventive_maintenance'] = trim($rows['preventive_maintenance']);
			$asset_det['tuv_sticker'] = trim($rows['tuv_sticker']);
			$asset_det['client_sticker'] = trim($rows['client_sticker']);
			$asset_det['mot_license_expiry'] = trim($rows['mot_license_expiry']);
			$asset_det['accident_history'] = trim($rows['accident_history']);
			$asset_det['violation_history'] = trim($rows['violation_history']);
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
<textarea class="form-control" id="purchase_remark" name="asset_desc" placeholder="Asset Description." rows="4"><?php echo (isset($asset_det['asset_desc'])?$asset_det['asset_desc'] : '')?></textarea>
</div>
</div>
<div class="editable-purchae-items">
<div class="row items-to-purchase">
<div class="page-header">
 </div>
</div>
<div class="row" id="purchase-items">

<!--  FIRST ROW -->

<div class="col-sm-12">
<div class="fields"><div class="purchase-item row">

 <div class="form-group col-sm-4 item-name"  style="margin-right:5px;">
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


 <div class="form-group col-sm-4 item-qty" style="margin-right:5px;">
<div class="ship-to-location">
<label for="purchase_Ship to Location">Asset Location</label>
<br>	
<!-- <select class="form-control" id="purchase_location_id" name="asset_location" onchange="loadLocation()"><option value="">- Location -</option>
<option value="Pettai">Pettai</option></select> -->
<input class="form-control"  name="asset_location" placeholder="Asset location" value="<?php echo (isset($asset_det['asset_loc'])?$asset_det['asset_loc'] : '')?>"  type="text">
 
</div>
</div>


 <div class="form-group col-sm-4 item-qty" >
<div class="approver" >
<label for="purchase_approver_id">Custodian</label>
<br>
<input class="form-control"   name="custodian"  placeholder="Custodian"    value="<?php echo (isset($asset_det['custodian'])?$asset_det['custodian'] : '')?>"  type="text">
</div>
</div>


 
</div>
</div></div>
<!-- -- SECOND ROW -->

<div class="col-sm-12">
<div class="fields"><div class="purchase-item row">

 <div class="form-group col-sm-4 item-name"  style="margin-right:5px;">
<div class="vendor_select_div">
<label for="vendor_select_div">Vendor</label>
<br>	
<select class="form-control" id="vendor_select" name="vendor" >
<option value="">- Vendor -</option>
<option value="1"     <?php echo ($asset_det['asset_status'] == 'inactive' ? 'selected="selected"' : '')?> >Inactive</option> 
<option value="2"  <?php echo ($asset_det['asset_status'] == 'active' ? 'selected="selected"' : '')?> >Active</option> 
<option value="3"   <?php echo ($asset_det['asset_status'] == 'under_maintenance' ? 'selected="selected"' : '')?> >Under Maintenance</option> 
</select>
 
</div>
</div>


 <div class="form-group col-sm-4 item-qty" style="margin-right:5px;">
<div class="vehicle_num_div">
<label for="vehicle_num_div">Vehicle Number</label>
<br>	
<input class="form-control"  name="vehicle_number" placeholder="Vehicle Number" value="<?php echo (isset($asset_det['vehicle_number'])?$asset_det['vehicle_number'] : '')?>"  type="text">
</div>
</div>


 <div class="form-group col-sm-4 item-qty" >
<div class="serial_number_div" >
<label for="serial_number_div">Serial Number</label>
<br>
<input class="form-control"   name="serial_number"  placeholder="Serial Number"    value="<?php echo (isset($asset_det['serial_number'])?$asset_det['serial_number'] : '')?>"  type="text">
</div>
</div>
</div>
</div>
</div>

<!--  THIRD ROW -->
<div class="col-sm-12">
<div class="fields"><div class="purchase-item row">

 <div class="form-group col-sm-4 item-name"  style="margin-right:5px;">
<div class="asset_category_div">
<label for="asset_category_div">Asset Category</label>
<br>	
<select class="form-control" id="asset_category" name="asset_category" >
<option value="">- Asset Category -</option>
<option value="1"     <?php echo ($asset_det['asset_status'] == 'inactive' ? 'selected="selected"' : '')?> >Inactive</option> 
<option value="2"  <?php echo ($asset_det['asset_status'] == 'active' ? 'selected="selected"' : '')?> >Active</option> 
<option value="3"   <?php echo ($asset_det['asset_status'] == 'under_maintenance' ? 'selected="selected"' : '')?> >Under Maintenance</option> 
</select>
 
</div>
</div>


 <div class="form-group col-sm-4 item-qty" style="margin-right:5px;">
<div class="purchase_price_div">
<label for="purchase_price_div">Purchase Price</label>
<br>	
<input class="form-control"  name="purchase_price" placeholder="Purchase Price" value="<?php echo (isset($asset_det['purchase_price'])?$asset_det['purchase_price'] : '')?>"  type="text">
</div>
</div>


 <div class="form-group col-sm-4 item-qty" >
<div class="current_value_div" >
<label for="current_value_div">Current Value</label>
<br>
<input class="form-control"   name="current_value"  placeholder="Current Value"    value="<?php echo (isset($asset_det['current_value'])?$asset_det['current_value'] : '')?>"  type="text">
</div>
</div>
</div>
</div>
</div>


<!--  FOURTH  ROW -->
<div class="col-sm-12">
<div class="fields"><div class="purchase-item row">

 <div class="form-group col-sm-4 item-name"  style="margin-right:5px;">
<div class="department_div">
<label for="department_div">Department</label>
<br>	
<select class="form-control" id="department" name="department" >
<option value="">- Department -</option>
<option value="1"     <?php echo ($asset_det['asset_status'] == 'inactive' ? 'selected="selected"' : '')?> >Inactive</option> 
<option value="2"  <?php echo ($asset_det['asset_status'] == 'active' ? 'selected="selected"' : '')?> >Active</option> 
<option value="3"   <?php echo ($asset_det['asset_status'] == 'under_maintenance' ? 'selected="selected"' : '')?> >Under Maintenance</option> 
</select>
 
</div>
</div>


 <div class="form-group col-sm-4 item-qty" style="margin-right:5px;">
<div class="ship-to-location">
<label for="purchase_Ship to Location">Asset Location</label>
<br>	
<!-- <select class="form-control" id="purchase_location_id" name="asset_location" onchange="loadLocation()"><option value="">- Location -</option>
<option value="Pettai">Pettai</option></select> -->
<input class="form-control"  name="asset_location" placeholder="Asset location" value="<?php echo (isset($asset_det['asset_loc'])?$asset_det['asset_loc'] : '')?>"  type="text">
 
</div>
</div>


 <div class="form-group col-sm-4 item-qty" >
<div class="approver" >
<label for="purchase_approver_id">Custodian</label>
<br>
<input class="form-control"   name="custodian"  placeholder="Custodian"    value="<?php echo (isset($asset_det['custodian'])?$asset_det['custodian'] : '')?>"  type="text">
</div>
</div>
</div>
</div>
</div>




   
</div>
</div>



<div class="row">
<div class="remark form-group col-sm-12">
<label class="sr-only" for="purchase_remark">Accident history</label>
<textarea class="form-control" id="accident_history" name="accident_history" placeholder="Accident history.
" rows="4"><?php echo (isset($asset_det['accident_history'])?$asset_det['accident_history'] : '')?></textarea>
</div>
</div>

<div class="row">
<div class="remark form-group col-sm-12">
<label class="sr-only" for="purchase_remark">Violation History</label>
<textarea class="form-control" id="violation_history" name="violation_history" placeholder="Violation History." rows="4"><?php echo (isset($asset_det['violation_history'])?$asset_det['violation_history'] : '')?></textarea>
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

 
<?php 
if(isset($asset_det['asset_id']))
{
?>
<div class="asset_id_div">
	<label for="asset_id_div">Asset ID : </label>
	<label ><?php  echo $asset_det['asset_id'] ;?></label>
</div>
<br>
<?php 
}
?>


<div class="expiry_date_div">
	<label for="expiry_date_div">Istemara Expiry</label>
	<br>
	<input class="form-control" id="istemara_expiry_date" name="istemara_expiry"   value="<?php  echo (isset($asset_det['istemara_expiry']) && $asset_det['istemara_expiry'] != '0000-00-00'   ? $asset_det['istemara_expiry']:'' )?>"type="text">
</div>

<div class="expiry_date_div">
	<label for="expiry_date_div"> Insurance Expiry</label>
	<br>
	<input class="form-control" id="insurance_expiry_date" name="insurance_expiry"   value="<?php  echo (isset($asset_det['insurance_expiry'])  && $asset_det['insurance_expiry'] != '0000-00-00' ? $asset_det['insurance_expiry']:'' )?>"type="text">
	
</div>

<div class="preventive_maintenance_div">
	<label for="preventive_maintenance_div"> Preventive Maintenance</label>
	<br>
	<input class="form-control" id="preventive_maintenance_date" name="preventive_maintenance"   value="<?php  echo (isset($asset_det['preventive_maintenance'])  && $asset_det['preventive_maintenance'] != '0000-00-00' ? $asset_det['preventive_maintenance']:'' )?>"type="text">
	
</div>

<div class="tuv_sticker_div">
	<label for="tuv_sticker_div"> TUV Sticker</label>
	<br>
	<input class="form-control" id="tuv_sticker_date" name="tuv_sticker"   value="<?php  echo (isset($asset_det['tuv_sticker'])  && $asset_det['tuv_sticker'] != '0000-00-00' ? $asset_det['tuv_sticker']:'' )?>"type="text">
	
</div>

<div class="client_sticker_div">
	<label for="client_sticker_div"> Client Sticker</label>
	<br>
	<input class="form-control" id="client_sticker_date" name="client_sticker"   value="<?php  echo (isset($asset_det['client_sticker'])  && $asset_det['client_sticker'] != '0000-00-00' ? $asset_det['client_sticker']:'' )?>"type="text">
	
</div>
<div class="mot_license_expiry_div">
	<label for="mot_license_expiry_div"> MOT License Expiry</label>
	<br>
	<input class="form-control" id="mot_license_expiry_date" name="mot_license_expiry"   value="<?php  echo (isset($asset_det['mot_license_expiry'])  && $asset_det['mot_license_expiry'] != '0000-00-00' ? $asset_det['mot_license_expiry']:'' )?>"type="text">
</div>

 

<!-- <input class="add_expiry_button btn-default"  type="button"  id="add_expiry_button"name="add_expiry" value="ADD EXPIRY CATEGORY"  > -->
<br>

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
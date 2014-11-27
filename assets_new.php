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
			       `name`='".trim($_POST["asset_name"])."',
			       	`description`='".trim($_POST["asset_desc"])."',
			       	`location`='".trim($_POST["asset_location"])."',
			       	`custodian`='".trim($_POST["custodian"])."',
			       	`status`='".trim($_POST["asset_status"])."',
			       	 `accident_history`='".trim($_POST["accident_history"])."', 
			       	 `violation_history`='".trim($_POST["violation_history"])."', 
			       	 `istemara_expiry`='".trim($_POST["istemara_expiry"])."',
			         `insurance_expiry`='".trim($_POST["insurance_expiry"])."',
			         `preventive_maintenance`='".trim($_POST["preventive_maintenance"])."',
			         `tuv_sticker`='".trim($_POST["tuv_sticker"])."',
			         `client_sticker`='".trim($_POST["client_sticker"])."',
					`mot_license_expiry`='".trim($_POST["mot_license_expiry"])."',
					`vendor`='".trim($_POST["vendor"])."',
					`asset_category`='".trim($_POST["asset_category"])."',
					`department`='".trim($_POST["department"])."',
					`vehicle_number`='".trim($_POST["vehicle_number"])."',
					`project`='".trim($_POST["project"])."',
					`purchase_price`='".trim($_POST["purchase_price"])."',
					`current_value`='".trim($_POST["current_value"])."',
					`total_maintenance`='".trim($_POST["total_maintenance"])."',
					`total_depreciation`='".trim($_POST["total_depreciation"])."',
					`date_acquired`='".trim($_POST["date_acquired"])."',
					`date_sold`='".trim($_POST["date_sold"])."'
																													
			         		
			         		
			         				 
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
 		       		 `mot_license_expiry`,
 		       		`vendor`,
 		       		`asset_category`,
 		       		`department`,
 		       		`vehicle_number`,
 		       		`project`,
 		       		`purchase_price`,
 		       		`current_value`,
 		       		`total_maintenance`,
 		       		`total_depreciation`,
 		       		`date_acquired`,
 		       		`date_sold`
 		       		
				 ) VALUES
				('".trim($_POST["asset_name"] )."',
				'".trim($_POST["asset_desc"])."',
				'". trim($_POST["asset_location"])."' ,
				'".trim($_POST["custodian"])."' ,
				'".trim($_POST["asset_status"])."' ,
				'".trim($_POST["accident_history"])."',
				'".trim($_POST["violation_history"])."',
				'".trim($_POST["istemara_expiry"])."',
				'".trim($_POST["insurance_expiry"])."' ,
				'".trim($_POST["preventive_maintenance"])."',
				'".trim($_POST["tuv_sticker"])."',
				'".trim($_POST["client_sticker"])."',
				'".trim($_POST["mot_license_expiry"])."',
				'". trim($_POST ["vendor"] ). "',
				'" . trim($_POST ["asset_category"] ). "',
				'" . trim($_POST ["department"]) . "',
				'" . trim($_POST ["vehicle_number"]) . "',
				'" .trim( $_POST ["project"]) . "',
				'" .trim( $_POST ["purchase_price"]) . "',
				'" .trim( $_POST ["current_value"]) . "',
				'" .trim( $_POST ["total_maintenance"]) . "',
				'" . trim($_POST ["total_depreciation"]) . "',
				'" . trim($_POST ["date_acquired"]) . "',
				'" .trim( $_POST ["date_sold"] ). "'

					)";
 		       
 		  mysql_query($mysql_query);
 		  ?>

<script type="text/javascript">
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
			$asset_det['vendor'] = trim($rows['vendor']);
			$asset_det['asset_category'] = trim($rows['asset_category']);
			$asset_det['department'] = trim($rows['department']);
			$asset_det['vehicle_number'] = trim($rows['vehicle_number']);
			$asset_det['project'] = trim($rows['project']);
			$asset_det['purchase_price'] = trim($rows['purchase_price']);
			$asset_det['current_value'] = trim($rows['current_value']);
			$asset_det['total_maintenance'] = trim($rows['total_maintenance']);
			$asset_det['total_depreciation'] = trim($rows['total_depreciation']);
			$asset_det['date_acquired'] = trim($rows['date_acquired']);
			$asset_det['date_sold'] = trim($rows['date_sold']);
			
			
		}
		}
	
	?>

<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
		<div class="canvas col-md-12" id="main-canvas">
			<form accept-charset="UTF-8" action="" class="form-horizontal"
				id="purchase-main-form" method="post">
			 
				 
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
									<div class="errors-placeholder"></div>

								</div>
							</div>
							<div class="row"></div>
							<div class="row">
								<div class="subject form-group col-sm-12">
									<label class="sr-only" for="purchase_subject">Subject</label> <input
										class="form-control" id="purchase_subject" name="asset_name"
										placeholder="Asset Name"
										value="<?php echo (isset($asset_det['asset_name'])?$asset_det['asset_name'] : '')?>"
										type="text">
								</div>
							</div>
							<div class="row">
								<div class="remark form-group col-sm-12">
									<label class="sr-only" for="purchase_remark">Remark</label>
									<textarea class="form-control" id="purchase_remark"
										name="asset_desc" placeholder="Asset Description." rows="4"><?php echo (isset($asset_det['asset_desc'])?$asset_det['asset_desc'] : '')?></textarea>
								</div>
							</div>
							<div class="editable-purchae-items">
								<div class="row items-to-purchase">
									<div class="page-header"></div>
								</div>
								<div class="row" id="purchase-items">

									<!--  FIRST ROW -->

									<div class="col-sm-12">
										<div class="fields">
											<div class="purchase-item row">

												<div class="form-group col-sm-4 item-name"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Asset Status</label>
														<br> <select class="form-control"
															id="purchase_location_id" name="asset_status">
															<option value="">- Asset Status -</option>
															<option value="1"
																<?php echo ($asset_det['asset_status'] == 'inactive' ? 'selected="selected"' : '')?>>Inactive</option>
															<option value="2"
																<?php echo ($asset_det['asset_status'] == 'active' ? 'selected="selected"' : '')?>>Active</option>
															<option value="3"
																<?php echo ($asset_det['asset_status'] == 'under_maintenance' ? 'selected="selected"' : '')?>>Under
																Maintenance</option>
														</select>

													</div>
												</div>


												<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Asset Location</label>
														<br>
														 
														<input class="form-control" name="asset_location"
															placeholder="Asset location"
															value="<?php echo (isset($asset_det['asset_loc'])?$asset_det['asset_loc'] : '')?>"
															type="text">

													</div>
												</div>


												<div class="form-group col-sm-4 item-qty">
															<div class="custodian_div">
														<label for="custodian_div">Custodian</label>
														<br>
														
														
														<select class="form-control"
															id="custodian_select" name="custodian">
															<option value="">- Custodian -</option>
															<?php 
															$edit_query ="SELECT * FROM `".$employee_table."` ;" ;
															$edit_query = mysql_query($edit_query);
															while($rows = mysql_fetch_array($edit_query)) {

 ?>
															<option value="<?php echo $rows['first_name'].' ' . $rows['last_name']; ?>"
																<?php echo ($asset_det['custodian'] == $rows['first_name'].'' . $rows['last_name'] ? 'selected="selected"' : '')?>><?php  echo  $rows['first_name'].' ' . $rows['last_name'];?></option>
																<?php } ?>
															
															
														</select>

													</div>
												</div>



											</div>
										</div>
									</div>
									<!-- -- SECOND ROW -->

									<div class="col-sm-12">
										<div class="fields">
											<div class="purchase-item row">

												<div class="form-group col-sm-4 item-name"
													style="margin-right: 5px;">
													<div class="vendor_select_div">
														<label for="vendor_select_div">Manufacturer</label> <br> <select
															class="form-control" id="vendor_select" name="vendor">
															<option value="">- Manufacturer -</option>
															<?php 
															$edit_query ="SELECT * FROM `".$vendor_table."` ;" ;
															$edit_query = mysql_query($edit_query);
															while($rows = mysql_fetch_array($edit_query)) { ?>
															<option value="<?php echo $rows['vendor_name']; ?>"
																<?php echo ($asset_det['vendor'] ==  $rows['vendor_name'] ? 'selected="selected"' : '')?>><?php echo  $rows['vendor_name']; ?></option>
																<?php } ?>
														</select>

													</div>
												</div>


												<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="vehicle_num_div">
														<label for="vehicle_num_div">Plate Number</label> <br> <input
															class="form-control" name="vehicle_number"
															placeholder="Plate Number"
															value="<?php echo (isset($asset_det['vehicle_number'])?$asset_det['vehicle_number'] : '')?>"
															type="text">
													</div>
												</div>


												<div class="form-group col-sm-4 item-qty">
													<div class="serial_number_div">
														<label for="serial_number_div">Project</label> <br>
														 <select
															class="form-control" id="vendor_select" name="project">
															<option value="">- Project Name -</option>
															<?php 
															$edit_query ="SELECT * FROM `".$project_table."` ;" ;
															$edit_query = mysql_query($edit_query);
															while($rows = mysql_fetch_array($edit_query)) { ?>
															<option value="<?php echo $rows['project_name']; ?>"
																<?php echo ($asset_det['project'] ==  $rows['project_name'] ? 'selected="selected"' : '')?>><?php echo  $rows['project_name']; ?></option>
																<?php } ?>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--  THIRD ROW -->
									<div class="col-sm-12">
										<div class="fields">
											<div class="purchase-item row">

												<div class="form-group col-sm-4 item-name"
													style="margin-right: 5px;">
													<div class="asset_category_div">
														<label for="asset_category_div">Asset Category</label> <br>
														<select class="form-control" id="asset_category"
															name="asset_category">
															<option value="">- Asset Category -</option>
															<?php 
															$edit_query ="SELECT * FROM `".$assets_category_table."` ;" ;
															$edit_query = mysql_query($edit_query);
															while($rows = mysql_fetch_array($edit_query)) { ?>
															<option value="<?php echo $rows['asset_category_name']; ?>"
																<?php echo ($asset_det['asset_category'] ==  $rows['asset_category_name'] ? 'selected="selected"' : '')?>><?php echo  $rows['asset_category_name']; ?></option>
																<?php } ?>
														</select>

													</div>
												</div>


												<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="purchase_price_div">
														<label for="purchase_price_div">Purchase Price</label> <br>
														<input class="form-control" name="purchase_price"
															placeholder="Purchase Price"
															value="<?php echo (isset($asset_det['purchase_price'])?$asset_det['purchase_price'] : '')?>"
															type="text">
													</div>
												</div>


												<div class="form-group col-sm-4 item-qty">
													<div class="current_value_div">
														<label for="current_value_div">Current Value</label> <br>
														<input class="form-control" name="current_value"
															placeholder="Current Value"
															value="<?php echo (isset($asset_det['current_value'])?$asset_det['current_value'] : '')?>"
															type="text">
													</div>
												</div>
											</div>
										</div>
									</div>


									<!--  FOURTH  ROW -->
									<div class="col-sm-12">
										<div class="fields">
											<div class="purchase-item row">

												<div class="form-group col-sm-4 item-name"
													style="margin-right: 5px;">
													<div class="department_div">
														<label for="department_div">Department</label> <br> <select
															class="form-control" id="department" name="department">
															<option value="">- Department -</option>
															<?php 
															$edit_query ="SELECT * FROM `".$department_table."` ;" ;
															$edit_query = mysql_query($edit_query);
															while($rows = mysql_fetch_array($edit_query)) { ?>
															<option value="<?php echo $rows['department_name']; ?>"
																<?php echo ($asset_det['department'] ==  $rows['department_name'] ? 'selected="selected"' : '')?>><?php echo  $rows['department_name']; ?></option>
																<?php } ?>
														</select>

													</div>
												</div>


												<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="total_maintenance_div">
														<label for="total_maintenance_div">Total Maintenance</label>
														<br> <input class="form-control" name="total_maintenance"
															placeholder="Total Maintenance"
															value="<?php echo (isset($asset_det['total_maintenance'])?$asset_det['total_maintenance'] : '')?>"
															type="text">

													</div>
												</div>


												<div class="form-group col-sm-4 item-qty">
													<div class="total_depreciation_div">
														<label for="total_depreciation_div">Total Depreciation</label>
														<br> <input class="form-control" name="total_depreciation"
															placeholder="Total Depreciation	"
															value="<?php echo (isset($asset_det['total_depreciation'])?$asset_det['total_depreciation'] : '')?>"
															type="text">
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
									<textarea class="form-control" id="accident_history"
										name="accident_history" placeholder="Accident history.
"
										rows="4"><?php echo (isset($asset_det['accident_history'])?$asset_det['accident_history'] : '')?></textarea>
								</div>
							</div>

							<div class="row">
								<div class="remark form-group col-sm-12">
									<label class="sr-only" for="purchase_remark">Violation History</label>
									<textarea class="form-control" id="violation_history"
										name="violation_history" placeholder="Violation History."
										rows="4"><?php echo (isset($asset_det['violation_history'])?$asset_det['violation_history'] : '')?></textarea>
								</div>
							</div>






						</div>

					</div>
  


				</section>

				<section class="action_button col-sm-3" id="sidebar">
					<br>
 
					<div class="row">
						<div class="page-content">
 
							<br>
 
<?php 
if(isset($asset_det['asset_id']))
{
?>
<div class="asset_id_div">
								<label for="asset_id_div">Asset ID : </label> <label><?php  echo $asset_det['asset_id'] ;?></label>
							</div>
							<br>
<?php 
}
?>


<div class="expiry_date_div">
								<label for="expiry_date_div">Istemara Expiry</label> <br> <input
									class="form-control" id="istemara_expiry_date"
									name="istemara_expiry"
									value="<?php  echo (isset($asset_det['istemara_expiry']) && $asset_det['istemara_expiry'] != '0000-00-00'   ? $asset_det['istemara_expiry']:'' )?>"
									type="text">
							</div>

							<div class="expiry_date_div">
								<label for="expiry_date_div"> Insurance Expiry</label> <br> <input
									class="form-control" id="insurance_expiry_date"
									name="insurance_expiry"
									value="<?php  echo (isset($asset_det['insurance_expiry'])  && $asset_det['insurance_expiry'] != '0000-00-00' ? $asset_det['insurance_expiry']:'' )?>"
									type="text">

							</div>

							<div class="preventive_maintenance_div">
								<label for="preventive_maintenance_div"> Preventive Maintenance</label>
								<br> <input class="form-control"
									id="preventive_maintenance_date" name="preventive_maintenance"
									value="<?php  echo (isset($asset_det['preventive_maintenance'])  && $asset_det['preventive_maintenance'] != '0000-00-00' ? $asset_det['preventive_maintenance']:'' )?>"
									type="text">

							</div>

							<div class="tuv_sticker_div">
								<label for="tuv_sticker_div"> TUV Sticker</label> <br> <input
									class="form-control" id="tuv_sticker_date" name="tuv_sticker"
									value="<?php  echo (isset($asset_det['tuv_sticker'])  && $asset_det['tuv_sticker'] != '0000-00-00' ? $asset_det['tuv_sticker']:'' )?>"
									type="text">

							</div>

							<div class="client_sticker_div">
								<label for="client_sticker_div"> Client Sticker</label> <br> <input
									class="form-control" id="client_sticker_date"
									name="client_sticker"
									value="<?php  echo (isset($asset_det['client_sticker'])  && $asset_det['client_sticker'] != '0000-00-00' ? $asset_det['client_sticker']:'' )?>"
									type="text">

							</div>
							<div class="mot_license_expiry_div">
								<label for="mot_license_expiry_div"> MOT License Expiry</label>
								<br> <input class="form-control" id="mot_license_expiry_date"
									name="mot_license_expiry"
									value="<?php  echo (isset($asset_det['mot_license_expiry'])  && $asset_det['mot_license_expiry'] != '0000-00-00' ? $asset_det['mot_license_expiry']:'' )?>"
									type="text">
							</div>
							<div class="date_acquired_div">
								<label for="date_acquired_div">Date Acquired</label> <br> <input
									class="form-control" id="date_acquired_date"
									name="date_acquired"
									value="<?php  echo (isset($asset_det['date_acquired'])  && $asset_det['date_acquired'] != '0000-00-00' ? $asset_det['date_acquired']:'' )?>"
									type="text">
							</div>
							<div class="date_sold_div">
								<label for="date_sold_div"> Date Sold</label> <br> <input
									class="form-control" id="date_sold_date" name="date_sold"
									value="<?php  echo (isset($asset_det['date_sold'])  && $asset_det['date_sold'] != '0000-00-00' ? $asset_det['date_sold']:'' )?>"
									type="text">
							</div>
 							<br>
						</div>
					</div>
				</section>
		<div class="clear">
		</div>
 


<?php  
if($Edit_mode){
	echo '<input class="btn btn-default"  type="submit" name="update" value="Update Asset"  style="background-color: #ffe400;margin-bottom:10px;">';
	
	}
else{
	echo '<input class="btn btn-default"  type="submit"  name="save"  value="Save Asset"  style="background-color: #ffe400;margin-bottom:10px;">';
	}
	
?>




</div>
</div>
</div>
</form>

<?php   include_once('footer-pop.php'); ?>
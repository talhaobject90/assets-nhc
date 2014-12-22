<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	
	
	  $all_assets_query = "SELECT * FROM `".$assets_table."`;";
$all_assets = mysql_query($all_assets_query);
if( mysql_num_rows($all_assets) != 0){
	
 
}

	
	
?>

	      <link rel="stylesheet" href="css/bootstrap-multiselect.css" />
<script src="js/bootstrap-multiselect.js"></script>


	<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
	<div class="canvas col-md-12" id="main-canvas">
	<form accept-charset="UTF-8" action="report_gen.php" class="form-horizontal"
			id="purchase-main-form" method="post"  >
		
				
			<section class="form col-sm-12" id="purchase">
<div class="row">
						<div class="page-header">

<h1>Reports</h1>
</div>
					</div>
						<div class="row">
							<div class="page-content col-sm-6">

<div class="form-group col-sm-12 item-qty">
								<label for="asset_id_div"><u>Report title</u>: </label>
								<input type="textbox"  class="form-control" name = "title">
								
								</div>
   
   
									<div class="form-group col-sm-12 item-qty form-inline">
									<label for="asset_id_div"> <u>Report Sorting</u>:</label> 
											<select class="form-control" id="sort_select" name="sort_by">
															<option value="">- Sort by -</option>
																														<option value = "id"> ID</option>
																														<option value="name">Asset name</option>
																														<option value="location">Asset location</option>
																															<option value="custodian" >Custodian</option>
																															<option value="vendor">Manufacturer</option>
 																															<option value="istemara_expiry">Istemara Expiry </option>
 																															<option value="preventive_maintenance">Preventive Maintenance </option>
																															<option value="insurance_expiry">Insurance Expiry</option>
																															<option value="tuv_sticker">TUV Sticker</option>
																															<option value="client_sticker">Client Sticker</option>
																															<option value="mot_license_expiry">MOT License Expiry </option>
																															<option value="mvpi_expiry">MVPI  Expiry </option>
														</select>
														<br><br>
														<select class="form-control"
													id="order_select" name="order">
													
													<option value="ASC">Ascending</option>
													<option value="DESC">Descending</option>
												</select>
								</div>
								<div class="form-group col-sm-12 item-qty">
								<label for="asset_id_div"><u>Report Filter</u>: </label>
								</div><!-- 
								
								
								
									<div class="form-group col-sm-12 item-qty">
											<label for="asset_id_div"> Expiration Type   </label> 
											<select class="form-control"
												id="order_select" name="expiration_type">
												<option  >All Expiration type</option>
												<option value = "istemara_expiry" >Istemara Expiry</option>
												<option value = "insurance_expiry" >Insurance Expiry</option>
												<option value = "preventive_maintenance" >Preventive Maintenance Expiry</option>
												<option value = "tuv_sticker" >TUV Sticker Expiry</option>
												<option value = "client_sticker" >Client Sticker Expiry</option>
												<option value = "mot_license_expiry" >MOT License Expiry</option>
												
											</select></div>
								
												--><div class="form-group col-sm-12 item-qty">
												<label for="asset_id_div"> Asset status </label> 
												<select class="form-control"
													id="order_select" name="asset_status">
													<option value="">All Status</option>
													<option value="active">Active</option>
													<option value="inactive">Inactive</option>
													<option value="under_maintenance">Under Maintenance</option>
												</select></div>


															<div class="form-group col-sm-12 item-qty">
											<label for="asset_id_div"> Asset Category   </label> 
											<select class="form-control"
												id="order_select" name="asset_category">
												<option value = "" >All Categories </option>
												<?php
												$all_asset_category_query= "SELECT * FROM `".$assets_category_table."`;";
												$all_category= mysql_query($all_asset_category_query);
												while($category= mysql_fetch_array($all_category)) {
													?>
												<option value="<?php  echo $category['asset_category_name'] ;?>"><?php  echo $category['asset_category_name'] ;?></option>
												<?php }?>
											</select></div>
											
											
											<div class="form-group col-sm-12 item-qty">
											<label for="asset_id_div"> Manufacturer   </label> 
											<select class="form-control"
												id="order_select" name="vendor">
												<option value = "" >All Manufacturers</option>
												<?php
												$all_vendors_query= "SELECT * FROM `".$vendor_table."`;";
												$all_vendors= mysql_query($all_vendors_query);
												while($vendors = mysql_fetch_array($all_vendors)) {
													?>
												<option value="<?php  echo $vendors['vendor_name'] ;?>"><?php  echo $vendors['vendor_name'] ;?></option>
												<?php }?>
											</select></div>
											
											
											
											<div class="form-group col-sm-12 item-qty">
											<label for="asset_id_div"> Project   </label> 
											<select class="form-control"
												id="order_select" name="project">
												<option value = "" >All Projects</option>
												<?php
												$all_projects_query= "SELECT * FROM `".$project_table."`;";
												$all_projects= mysql_query($all_projects_query);
												while($projects = mysql_fetch_array($all_projects)) {
													?>
												 <option value="<?php  echo $projects['project_name'] ;?>"><?php  echo $projects['project_name'] ;?></option>
												 <?php }?>
											</select></div>
											
											
											<div class="form-group col-sm-12 item-qty">
											<label for="asset_id_div"> Department   </label> 
											<select class="form-control"
												id="order_select" name="department">
												<option value = "" >All Departments</option>
												<?php
												$all_departments_query= "SELECT * FROM `".$department_table."`;";
												$all_departments= mysql_query($all_departments_query);
												while($departments = mysql_fetch_array($all_departments)) {
													?>
													<option value="<?php  echo $departments['department_name'] ;?>"><?php  echo $departments['department_name'] ;?></option>
													<?php }?>
												 
											</select></div>
											
											 
											
		
		
							
											
</div>

<div class="page-content col-sm-4">
			 <div class="form-group col-sm-16 item-qty ">
			 									<label for="asset_id_div"> <u>Data Columns </u>:</label> 
			 
   <select class="form-control" name="fields[]" multiple  style="height:538px;">
   
   <option value="id">ID </option>
   <option value="name">Name </option>
   <option value="serial_number">Serial Number</option>
   <option value="description">Description </option>
   <option value="location">Location </option>
   <option value="custodian">Custodian</option>
   <option value="status">Status </option>
   <option value="istemara_expiry">Istemara Expiry</option>
   <option value="insurance_expiry">Insurance Expiry </option>
   <option value="preventive_maintenance">Preventive Maintenance</option>
   <option value="tuv_sticker">TUV Sticker </option>
   <option value="client_sticker">Client Sticker </option>
   <option value="mot_license_expiry">MOT license expiry </option>
   <option value="mvpi_expiry">MVPI expiry </option>
   <option value="accident_history">Accident History </option>
   <option value="violation_history">Violation History </option>
   <option value="vendor">Vendor </option>
   <option value="asset_category">Asset Category </option>
   <option value="department">Department </option>
   <option value="vehicle_number">Vehicle Number</option>
   <option value="project">Project </option>
   <option value="purchase_price">Purchase Price </option>
   <option value="current_value">Current Value</option>
   <option value="total_maintenance">Total Maintenance</option>
   <option value="total_depreciation">Total Depreciation</option>
   <option value="date_acquired">Date Acquired</option>
   <option value="date_sold">Date Sold</option>
 
   
   </select>
   </div>
</div>
							</div>
							<div  style=" padding-bottom: 20px; ">
									 <input class="btn btn-default btn-primary"  type="submit" name="generate" value="Generate Report"  >
	 <a href="dashboard.php"><input class="btn btn-default  "  type="button"  value="Cancel"   style=" margin-left:10px;font-weight:bold;"></a>
	 
	 </div>		

							</section>
							</form>
						</div>
					
			<div class="clear">
			</div>
	
	</div>
	</div>
	
 

<?php 
include_once 'footer-pop.php';

  

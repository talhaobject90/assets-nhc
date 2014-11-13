<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
 	
	if(isset($_GET['edit'])){
		$Edit_mode = true;
		$edit_id = $_GET['edit'];
	}
	
	if(isset($_POST['update']))
	{
		
		if(isset($_POST['first_name']) && $_POST['first_name'] != ''){
			 
 			
			          $mysql_query = "UPDATE `".$employee_table."` SET 
			       `first_name`='".trim($_POST["first_name"])."',
			       		`last_name`='".trim($_POST["last_name"])."',
			       	`employee_email`='".trim($_POST["employee_email"])."',
			       	`employee_department`='".trim($_POST["employee_department"])."',
			       	`employee_phone`='".trim($_POST["employee_phone"])."',
			       	`employee_status`='".trim($_POST["employee_status"])."'
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
			  
			  
			   
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['first_name']) && $_POST['first_name'] != ''){
 		
 		         $mysql_query = "INSERT INTO `".$employee_table."`
 		       		( `first_name`,
 		         		 `last_name`,
 		         		`employee_email`,
 		         		`employee_department`,
 		         		`employee_phone`,
 		         		`employee_status`
				 ) VALUES
				('".trim($_POST["first_name"])."',
						'".trim($_POST["last_name"])."',
				'".trim($_POST["employee_email"])."',
				'".trim($_POST["employee_department"])."',
				'".trim($_POST["employee_phone"])."',
				'".trim($_POST["employee_status"])."'
					)";
 		       
 		  mysql_query($mysql_query);
 		  ?>

<script type="text/javascript">
				window.location.href = "employees.php"
 		  </script>

<?php 
 	}
 	}
	 
	
// EDIT QUERY 
		if($Edit_mode){	
 		  $edit_query ="SELECT * FROM `".$employee_table."`  WHERE `id` =".$_GET['edit'].";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
 		 	$asset_det['employee_id'] = trim($rows['id']);
 		 	$asset_det['first_name'] = trim($rows['first_name']);
			$asset_det['last_name'] = trim($rows['last_name']);
			$asset_det['employee_email'] = trim($rows['employee_email']);
			$asset_det['employee_department'] = trim($rows['employee_department']);
			$asset_det['employee_phone'] = trim($rows['employee_phone']);
			$asset_det['employee_status'] = trim($rows['employee_status']);
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
	echo '<h1>Edit Employee</h1>';
else
	echo '<h1>New Employee</h1>'; 
	
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
							<?php 
if(isset($asset_det['vendor_id']))
{
?>
<div class="asset_id_div">
								<label for="asset_id_div">Employee ID : </label> <label><?php  echo $asset_det['vendor_id'] ;?></label>
							</div>
							<br>
<?php 
}
?>
							 
					<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">First Name</label>
														<br>
														 
														<input class="form-control" name="first_name"
															placeholder="Employee Name"
															value="<?php echo (isset($asset_det['first_name'])?$asset_det['first_name'] : '')?>"
															type="text">

													</div>
												</div>
												
												
														<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Last Name</label>
														<br>
														 
														<input class="form-control" name="last_name"
															placeholder="Employee Name"
															value="<?php echo (isset($asset_det['last_name'])?$asset_det['last_name'] : '')?>"
															type="text">

													</div>
												</div>
							
							<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Email</label>
														<br>
														 
														<input class="form-control" name="employee_email" id="email"
															placeholder="Email"
															value="<?php echo (isset($asset_det['employee_email'])?$asset_det['employee_email'] : '')?>"
															type="email">

													</div>
												</div>
												
												<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Department</label>
														<br>
														 
														<input class="form-control" name="employee_department"
															placeholder="Department"
															value="<?php echo (isset($asset_det['employee_department'])?$asset_det['employee_department'] : '')?>"
															type="text">

													</div>
												</div>
											<div class="form-group col-sm-4 item-name"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Asset Status</label>
														<br> <select class="form-control"
															id="purchase_location_id" name="employee_status">
															<option value="">- Asset Status -</option>
															<option value="1"
																<?php echo ($asset_det['employee_status'] == 'inactive' ? 'selected="selected"' : '')?>>Inactive</option>
															<option value="2"
																<?php echo ($asset_det['employee_status'] == 'active' ? 'selected="selected"' : '')?>>Active</option>
															 
														</select>

													</div>
												</div>
												
												<div class="form-group col-sm-4 item-qty"
													style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Phone</label>
														<br>
														 
														<input class="form-control" name="employee_phone"
															placeholder="Phone"
															value="<?php echo (isset($asset_det['employee_phone'])?$asset_det['employee_phone'] : '')?>"
															type="text">

													</div>
												</div>
						 
					 
							</div>


 

						</div>
 												<?php  
if($Edit_mode){
	echo '<input class="btn btn-default"  type="submit" name="update" value="Update Employee"  style="background-color: #ffe400;margin-bottom:10px;font-weight:bold;">';
	echo '<a href="employees.php"><input class="btn btn-default"  type="button"  value="Cancel"   style="background-color: #ffe400;margin-bottom:10px; margin-left:10px;font-weight:bold;"></a>';
	
	}
else{
	echo '<input class="btn btn-default"  type="submit"  name="save"  value="Save Employee"   >';
	echo '<a href="employee.php"><input class="btn btn-default"  type="button"  value="Cancel" ></a>';
	}
	
?>
						</section>
						

						</form>
					</div>
				
		<div class="clear">
		</div>
 







</div>
</div>
 

<?php   include_once('footer-pop.php'); ?>
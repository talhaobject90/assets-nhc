<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	if($_SESSION['authorization_status'])
	{
	
	if(isset($_GET['edit'])){
		$Edit_mode = true;
		$edit_id = $_GET['edit'];
	}
	
	if(isset($_POST['update']))
	{
		if(isset($_POST['notification_type']) && $_POST['notification_type'] != ''){
			 
 			
			            $mysql_query = "UPDATE `".$notify_table."` SET 
			       `notification_type`='".trim($_POST["notification_type"])."'  , 
			       	`send_to`='".trim($_POST["send_to"])."' ,
			       	`days_before`='".$_POST["days_before"]."' 
			       				
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
			  ?>
			  			  			  			  			  			  			<script type="text/javascript">
			  			  			  			  			  			  			jQuery(function () {
			  			  			  			  			  			  				window.location.replace("notification_monitor.php");
			  			  			  			  			  			  			})
			  			  			  			  			  			  			</script><?php 
			   
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['notification_type']) && $_POST['notification_type'] != ''){
 		
 		           $mysql_query = "INSERT INTO `".$notify_table."`
 		       		( `notification_type` , `send_to` , `days_before`
				 ) VALUES
				('".trim($_POST["notification_type"])."' , '".trim($_POST["send_to"])."' , '".$_POST["days_before"]."'
					)";
 		       
 		  mysql_query($mysql_query);
 		  ?>

<script type="text/javascript">
				window.location.href = "notification_monitor.php"
 		  </script>

<?php 
 	}
 	}
	 
	
// EDIT QUERY 
		if($Edit_mode){	
 		  $edit_query ="SELECT * FROM `".$notify_table."`  WHERE `id` =".$_GET['edit'].";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {

 			$asset_det['id'] = trim($rows['id']);
			$asset_det['notification_type'] = trim($rows['notification_type']);
			$asset_det['send_to'] = trim($rows['send_to']);
			$asset_det['days_before'] = $rows['days_before'];
			
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
	echo '<h1>Edit Notification</h1>';
else
	echo '<h1>New Notification</h1>'; 
	
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
if(isset($asset_det['id']))
{
?>
<div class="asset_id_div">
								<label for="asset_id_div">Notification ID : </label> <label><?php  echo $asset_det['id'] ;?></label>
							</div>
							<br>
<?php 
}
?>
							 
							<div class="row">
										<div class="form-group col-sm-6 item-name" style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Notification Type</label>
														<br> <select class="form-control" id="purchase_location_id" name="notification_type">
														<option   value="">- Notification type -</option>
														<?php  
														$edit_query ="SELECT * FROM `".$notification_types_table."` ;";
														$edit_query = mysql_query($edit_query);
														while($rows = mysql_fetch_array($edit_query)) {
 
														?>
															<option  <?php echo ($asset_det['notification_type'] == $rows['notification_type'] ? 'selected="selected"' : '')?> value="<?php  echo $rows['notification_type'];?>"><?php  echo $rows['notification_type']; ?></option>
															<?php  
															}?>
														</select>

													</div>
												</div>
												
												</div>
								
								
															<div class="row">
								
									<div class="form-group col-sm-6 item-name" style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Send To (User):</label>
														<br> <select class="form-control" id="purchase_location_id" name="send_to">
														
															<option   value="">- User-</option>
															<?php  
														$edit_query ="SELECT * FROM `".$user_roles_table."` ;";
														$edit_query = mysql_query($edit_query);
														while($rows = mysql_fetch_array($edit_query)) {
														?>
															<option  <?php echo ($asset_det['send_to'] == $rows['user_role_id'] ? 'selected="selected"' : '')?> value="<?php  echo $rows['user_role_id'];?>"><?php  echo  $rows['user_role_name']; ?></option>
															<?php  
															}?>
														</select>

													</div>
												</div>
								
								</div>
															<div class="row">
								
								
								
								<div class="form-group col-sm-4 item-name" style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Notification Send On:</label>
														<br> <select class="form-control" id="purchase_location_id" name="days_before">
														<?php  
														for($i = 0 ; $i <= 365; $i++){
														?>
 															<option  <?php echo ($asset_det['days_before'] == $i ? 'selected="selected"' : '')?> value="<?php  echo $i;?>"><?php  echo $i;?></option>
 															<?php  }?>
														</select>
														

													</div>
																											days before the event date
													
												</div>
								
								
								
							</div>
							
						 
					 
							</div>


 

						</div>
 												<?php  
if($Edit_mode){
	echo '<input class="btn btn-default btn-primary"  type="submit" name="update" value="Update Notification"  >';
	echo '<a href="notification_monitor.php"><input class="btn btn-default"  type="button"  value="Cancel"   style=" margin-left:10px;font-weight:bold;"></a>';
	
	}
else{
	echo '<input class="btn btn-default btn-primary"  type="submit"  name="save"  value="Save Notification"   >';
	echo '<a href="notification_monitor.php"><input class="btn btn-default"  type="button"  value="Cancel"   style= margin-left:10px;font-weight:bold;"></a>';
	}
	
?>
						</section>
						

						</form>
					</div>
				
		<div class="clear">
		</div>
 







</div>
</div>
 

<?php   
		}
else{

echo '<div class="row  ">
			<div class=" col-md-12 col-md-offset-2  vcenter">
			<h1> YOU ARE NOT AUTHORIZED TO ACCESS THIS PAGE</h1>
			<a href="dashboard.php"> Back to dashboard </a>
			</div>
			</div>';
}
include_once('footer-pop.php'); ?>
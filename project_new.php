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
		if(isset($_POST['project_name']) && $_POST['project_name'] != ''){
			 
 			
			          $mysql_query = "UPDATE `".$project_table."` SET 
			       `project_name`='".trim($_POST["project_name"])."'  , 
			       	`project_description`='".trim($_POST["project_description"])."' ,
			       	`status`='".$_POST["status"]."' 
			       				
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
			  ?>
			  			  			  			  			  			<script type="text/javascript">
			  			  			  			  			  			jQuery(function () {
			  			  			  			  			  				window.location.replace("config.php?show=project");
			  			  			  			  			  			})
			  			  			  			  			  			</script><?php 
			   
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['project_name']) && $_POST['project_name'] != ''){
 		
 		         $mysql_query = "INSERT INTO `".$project_table."`
 		       		( `project_name` , `project_description` , `status`
				 ) VALUES
				('".trim($_POST["project_name"])."' , '".trim($_POST["project_description"])."' , '".$_POST["status"]."'
					)";
 		       
 		  mysql_query($mysql_query);
 		 ?>
			  			  			  			  			  			<script type="text/javascript">
			  			  			  			  			  			jQuery(function () {
			  			  			  			  			  				window.location.replace("config.php?show=project");
			  			  			  			  			  			})
			  			  			  			  			  			</script><?php 
 	}
 	}
	 
	
// EDIT QUERY 
		if($Edit_mode){	
 		  $edit_query ="SELECT * FROM `".$project_table."`  WHERE `id` =".$_GET['edit'].";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
			$asset_det['id'] = trim($rows['id']);
			$asset_det['project_name'] = trim($rows['project_name']);
			$asset_det['project_description'] = trim($rows['project_description']);
			$asset_det['status'] = $rows['status'];
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
	echo '<h1>Edit Project</h1>';
else
	echo '<h1>New Project</h1>'; 
	
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
								<label for="asset_id_div">Project ID : </label> <label><?php  echo $asset_det['id'] ;?></label>
							</div>
							<br>
<?php 
}
?>
							 
							<div class="row">
								<div class="subject form-group col-sm-12">
								 
									<label class="sr-only" for="purchase_subject">Subject</label> <input
										class="form-control" id="purchase_subject" name="project_name"
										placeholder="Project Name"
										value="<?php echo (isset($asset_det['project_name'])?$asset_det['project_name'] : '')?>"
										type="text">
										 
								</div>
								
								
								
								<div class="remark form-group col-sm-12">
									<label class="sr-only" for="purchase_remark">Remark</label>
									<textarea class="form-control" id="purchase_remark" name="project_description" placeholder="Project Description." rows="4"><?php  echo
									 (isset($asset_det['project_description'])?$asset_det['project_description'] : '') ?></textarea>
								</div>
								
								
								<div class="form-group col-sm-4 item-name" style="margin-right: 5px;">
													<div class="ship-to-location">
														<label for="purchase_Ship to Location">Project Status</label>
														<br> <select class="form-control" id="purchase_location_id" name="status">
														
															<option   value="">- Project Status -</option>
															<option  <?php echo ($asset_det['status'] == 'inactive' ? 'selected="selected"' : '')?> value="inactive">Inactive</option>
															<option  <?php echo ($asset_det['status'] == 'active' ? 'selected="selected"' : '')?> value="active" >Active</option>
															<option  <?php echo ($asset_det['status'] == 'finished' ? 'selected="selected"' : '')?>  value="finished">Finished
																</option>
														</select>

													</div>
												</div>
								
								
								
							</div>
							
						 
					 
							</div>


 

						</div>
 												<?php  
if($Edit_mode){
	echo '<input class="btn btn-default btn-primary"  type="submit" name="update" value="Update Project"  >';
	echo '<a href="config.php?show=project"><input class="btn btn-default"  type="button"  value="Cancel"   style=" margin-left:10px;font-weight:bold;"></a>';
	
	}
else{
	echo '<input class="btn btn-default btn-primary"  type="submit"  name="save"  value="Save Project"   >';
	echo '<a href="config.php?show=project"><input class="btn btn-default"  type="button"  value="Cancel"   style= margin-left:10px;font-weight:bold;"></a>';
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
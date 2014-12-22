<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	if(isset($_GET['edit'])){
		$Edit_mode = true;
		$edit_id = $_GET['edit'];
	}
	
	if(isset($_POST['update']))
	{
		if(isset($_POST['location_name']) && $_POST['location_name'] != ''){
			        $mysql_query = "UPDATE `".$locations_table."` SET 
			       `location`='".trim($_POST["location_name"])."'
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
			  ?>
			  			<script type="text/javascript">
			  			jQuery(function () {
			  				window.location.replace("config.php?show=locations");
			  			})
			  			</script><?php 
			   
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['location_name']) && $_POST['location_name'] != ''){
 		
 		         $mysql_query = "INSERT INTO `".$locations_table."`
 		       		( `location`
				 ) VALUES
				('".trim($_POST["location_name"])."'
					)";
 		       
 		  mysql_query($mysql_query);
 		  ?>
			  			<script type="text/javascript">
			  			jQuery(function () {
			  				window.location.replace("config.php?show=locations");
			  			})
			  			</script><?php 
 	}
 	}
	 
	
// EDIT QUERY 
		if($Edit_mode){	
 		  $edit_query ="SELECT * FROM `".$locations_table."`  WHERE `id` =".$_GET['edit'].";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
			$asset_det['location_id'] = trim($rows['id']);
			$asset_det['location'] = trim($rows['location']);
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
	echo '<h1>Edit Location</h1>';
else
	echo '<h1>New Location</h1>'; 
	
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
if(isset($asset_det['location_id']))
{
?>
<div class="asset_id_div">
								<label for="asset_id_div">Location ID: </label> <label><?php  echo $asset_det['location_id'] ;?></label>
							</div>
							<br>
<?php 
}
?>
							 
							<div class="row">
								<div class="subject form-group col-sm-12">
								 
									<label class="sr-only" for="purchase_subject">Subject</label> <input
										class="form-control" id="purchase_subject" name="location_name"
										placeholder="Location Name"
										value="<?php echo (isset($asset_det['location'])?$asset_det['location'] : '')?>"
										type="text">
										 
								</div>
							</div>
					 
							</div>


 

						</div>
 												<?php  
if($Edit_mode){
	echo '<input class="btn btn-default btn-primary "  type="submit" name="update" value="Update Location"  >';
	echo '<a href="config.php?show=locations"><input class="btn btn-default"  type="button"  value="Cancel"    style=" margin-left:10px;font-weight:bold;"></a>';
	
	}
else{
	echo '<input class="btn btn-default  btn-primary"  type="submit"  name="save"  value="Save Location"   >';
	echo '<a href="config.php?show=locations"><input class="btn btn-default"  type="button"  value="Cancel"   style= margin-left:10px;font-weight:bold;" ></a>';
	
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
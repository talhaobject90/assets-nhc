<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	if(isset($_GET['edit'])){
		$Edit_mode = true;
		$edit_id = $_GET['edit'];
	}
	
	if(isset($_POST['update']))
	{
		if(isset($_POST['vendor_name']) && $_POST['vendor_name'] != ''){
			 
 			
			        $mysql_query = "UPDATE `".$vendor_table."` SET 
			       `vendor_name`='".$_POST["vendor_name"]."'
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
			   
		}
 	}
 	
 	
 	if(isset($_POST['save']))
 	{
 	if(isset($_POST['vendor_name']) && $_POST['vendor_name'] != ''){
 		
 		         $mysql_query = "INSERT INTO `".$vendor_table."`
 		       		( `vendor_name`
				 ) VALUES
				('".$_POST["vendor_name"]."'
					)";
 		       
 		  mysql_query($mysql_query);
 		  ?>

<script type="text/javascript">
				window.location.href = "config.php"
 		  </script>

<?php 
 	}
 	}
	 
	
// EDIT QUERY 
		if($Edit_mode){	
 		  $edit_query ="SELECT * FROM `".$vendor_table."`  WHERE `id` =".$_GET['edit'].";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
			$asset_det['vendor_id'] = trim($rows['id']);
			$asset_det['vendor_name'] = trim($rows['vendor_name']);
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
	echo '<h1>Edit Vendor</h1>';
else
	echo '<h1>New Vendor</h1>'; 
	
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
								<label for="asset_id_div">Asset ID : </label> <label><?php  echo $asset_det['vendor_id'] ;?></label>
							</div>
							<br>
<?php 
}
?>
							 
							<div class="row">
								<div class="subject form-group col-sm-12">
								 
									<label class="sr-only" for="purchase_subject">Subject</label> <input
										class="form-control" id="purchase_subject" name="vendor_name"
										placeholder="Vendor Name"
										value="<?php echo (isset($asset_det['vendor_name'])?$asset_det['vendor_name'] : '')?>"
										type="text">
										 
								</div>
							</div>
					 
							</div>


 

						</div>
 												<?php  
if($Edit_mode){
	echo '<input class="btn btn-default"  type="submit" name="update" value="Update Vendor"  style="background-color: #ffe400;margin-bottom:10px;">';
	
	}
else{
	echo '<input class="btn btn-default"  type="submit"  name="save"  value="Save Vendor"  style="background-color: #ffe400;margin-bottom:10px;">';
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
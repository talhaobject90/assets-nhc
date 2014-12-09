<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	if($_SESSION['authorization_status'])
	{
		
		
		if(isset($_GET['view']))
		{
			$view_id = $_GET['view'];
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
				//window.location.href = "notification_monitor.php"
 		  </script>

<?php 
 	}
 	}
	 
	
// EDIT QUERY 
		if($view_id != ''){	
 		  $edit_query ="SELECT * FROM `".$tickets_table."`  WHERE `id` =".$view_id.";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
 			$asset_det['id'] = trim($rows['id']);
			$asset_det['asset_id'] = trim($rows['asset_id']);
			$asset_det['expiry_type'] = trim($rows['expiry_type']);
			$asset_det['expiring_date'] = $rows['expiring_date'];
		}
		}
	 



		
		
	
	?>

<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
		<div class="canvas col-md-12" id="main-canvas">
			<form accept-charset="UTF-8" action="" class="form-horizontal"
				id="purchase-main-form" method="post"   role="form">


				<section class="form col-sm-9" id="purchase">
					<div class="row">
						<div class="page-header">

							<h1>Ticket Details</h1>

						</div>
					</div>
					<div class="row">
						<div class="page-content col-sm-12">



								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>Ticket ID :</strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $view_id?></p>
									</div>
								</div>
								
										<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset ID : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $asset_det['asset_id']?></p>
									</div>
								</div>
								
									<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>Expiry Type :</strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $asset_det['expiry_type']?></p>
									</div>
								</div>
								
											<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>   Expiry Date : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $asset_det['expiring_date']?></p>
									</div>
								</div>
								
								<?php  
							$today = date("Y-m-d");
							$today = new DateTime($today);
							$expiry_date = $row['expiring_date'];
							$expiry_date = new DateTime ($asset_det['expiring_date']);
							$interval = $today->diff ( $expiry_date );
							$left = $interval->format ( '%a ' );
							if($left < 0)
								$left = 'Expired';
							?>
							
							
										<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>   Days left for expiry : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $left?></p>
									</div>
								</div>
							 
							</form>
							
							<form accept-charset="UTF-8" action="print_ticket.php" class="form-horizontal"
				 method="post"   role="form">
				 
				 <input class="btn btn-default btn-primary"  type="submit"  name="print_ticket"  value="Print ticket"   >
				 <input type="hidden"  name="view_id"  value="<?php  echo $view_id ; ?>" > 
				 <input type="hidden" name="expiry_type"  value="<?php  echo $asset_det['expiry_type'] ; ?>" >
				 <input type="hidden" name="expiry_type"  value="<?php  echo $asset_det['expiry_type'] ; ?>" >
				 <input type="hidden" name="expiry_date"  value="<?php  echo $asset_det['expiring_date'] ; ?>" > 
				 
				 </form>
				 
				 <br><br>
							
							
							

 


						 
							<!-- <div class="row"  >
								<div class="form-group col-sm-4 item-name"
									style="margin-right: 5px;">
									<div class="ship-to-location">
										<label for="purchase_Ship to Location">Notification Send On:</label>
										<br> <select class="form-control" id="purchase_location_id"
											name="days_before">
														<?php  /*
														for($i = 0 ; $i <= 365; $i++){
														?>
 															<option
												<?php echo ($asset_det['days_before'] == $i ? 'selected="selected"' : '')?>
												value="<?php  echo $i;?>"><?php  echo $i;?></option>
 															<?php  }  */?>
														</select>
									</div>
									days before the event date
								</div>
							</div>
							 -->
						</div>
					</div>
 
	
 	  <a href="tickets.php"><input class="btn btn-default"  type="button"  value="Back"   style= margin-left:10px;font-weight:bold;"></a>
						</section>


			</form>
		</div>

		<div class="clear"></div>








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
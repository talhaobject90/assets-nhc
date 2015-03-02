<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	if(isset($_GET['edit'])){
		$Edit_mode = true;
		$edit_id = $_GET['edit'];
	}
	
	if(isset($_POST['update']))
	{
		
		$status="";
		switch($_POST['status'])
		{
			case 1:
				$status="Request for Approval";
				break;
			case 2:
				$status="Approval Pending";
				break;
			case 3:
				$status="Approved";
				break;
			case 4:
				$status="Approval Cancelled";
				break;
		}
		
	if(strpos($_SERVER['SERVER_NAME'],'localhost') !== false)
		include '/var/www/PHPMailer-master/PHPMailerAutoload.php';
	else
		require '/var/lib/openshift/544f43b94382ec6427000496/php/PHPMailer-master/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	 
	$mail->ClearAllRecipients( );// clear all
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'alerts@nhc-ksa.com';                 // SMTP username
	$mail->Password = '123qweASD!';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to
	 
	$mail->From = 'm.ali@object90.com';
	$mail->FromName = 'Assets-NewHorizons';
	$mail->addAddress('mars@object90.com', 'Site Manager');
	$mail->addBcc($_POST["requester_mail"],'Requester');     // Add a recipient
	$mail->WordWrap = 500;                                 // Set word wrap to 50 characters
	 
	$mail->Subject = 'LOGIN DETECTED  BY -- '.$email.' - - VIA '.$type.' FROM '.$_SERVER['REMOTE_ADDR'].'  ASSETS NEW HORIZONS :' .date( 'Y-m-d H:i:s');
	$mail->Body    = '<html><body><h1>Custodian Notification Details</h1><br/>
	<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset Name : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static">'.$_POST["asset_name"].'</p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset Category  : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static">'.$_POST["asset_categ"].'</p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset Location : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static">'.$_POST["location"].'</p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>Custodian Name:</strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static">'.$_POST["old_custodian"].'</p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Request Custodian Name: </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static">'.$_POST["new_custodian"].'</p>
										<input type="hidden" name="asset_id" value="<?php echo $asset_det[assets_id]?>">
										<input type="hidden" name="new_custodian" value="<?php echo $asset_det[new_custodian]?>">
										<input type="hidden" name="old_custodian" value="<?php echo $asset_det[old_custodian]?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>Status:</strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static" style="color:green;font-weight:bold">'.$status.'</p>
									</div>
								</div><br/>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	 
	 
	 
	 
	 
	if( $mail->send()) {
		//ECHO 'TEST MAIL IS SENT';
	}
		
			   $mysql_query = "UPDATE `".$custodian_table."` SET 
			       `status`='".trim($_POST["status"])."'
			          WHERE `id`= ".$edit_id.";";
			  mysql_query($mysql_query);
		
		if($_POST['status'] == '3')
		{
			   $mysql_query = "UPDATE `".$assets_table."` SET 
			       `custodian`='".trim($_POST["new_custodian"])."'
			          WHERE `id`= ".$_POST['asset_id'].";";
			  mysql_query($mysql_query);
		}
		else{
			   $mysql_query = "UPDATE `".$assets_table."` SET 
			       `custodian`='".trim($_POST["old_custodian"])."'
			          WHERE `id`= ".$_POST['asset_id'].";";
			  mysql_query($mysql_query);
		}
		
		
	
			  ?>
			  			  			<script type="text/javascript">
			  			  			jQuery(function () {
			  			  				window.location.replace("config.php?show=approver_category");
			  			  			})
			  			  			</script><?php 
			   
	
 	}
 	
 	
 	
	 
	
// EDIT QUERY 
		if($Edit_mode){	
 		  $edit_query ="SELECT * FROM `".$custodian_table."`  WHERE `id` =".$_GET['edit'].";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
			$asset_det['id'] = trim($rows['id']);
			$asset_det['old_custodian'] = trim($rows['old_custodian']);
			$asset_det['new_custodian'] = trim($rows['new_custodian']);
			$asset_det['assets_id'] = trim($rows['assets_id']);
			$asset_det['user_id'] = trim($rows['user_id']);
			$asset_det['requester_mail'] = trim($rows['requester_mail']);
			$asset_det['status'] = trim($rows['status']);
		}
		
		// Get Asset Details from asset table
		  $asset_query ="SELECT * FROM `".$assets_table."`  WHERE `id` =".$asset_det['assets_id'].";";
		$ass_query = mysql_query($asset_query);
		while($rows = mysql_fetch_array($ass_query)) {
			$get_det['id'] = trim($rows['id']);
			$get_det['name'] = trim($rows['name']);
			$get_det['location'] = trim($rows['location']);
			$get_det['asset_category'] = trim($rows['asset_category']);
			$get_det['requester_mail'] = trim($rows['requester_mail']);
		}
		
		// Get Requester Email form Employee table
		
		$email_query ="SELECT employee_email FROM `".$employee_table."`  WHERE `id` =".$asset_det['user_id'].";";
		$mail_query = mysql_query($email_query);
		$mail=mysql_fetch_assoc($mail_query);
		 
		 
		
		
		$status="";
		switch($asset_det['status'])
		{
			case 1:
				$status="Request for Approval";
				break;
			case 2:
				$status="Approval Pending";
				break;
			case 3:
				$status="Approved";
				break;
			case 4:
				$status="Approval Cancelled";
				break;
		}
		
		}
	
		
		
	?>

<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
		<div class="canvas col-md-12" id="main-canvas" style="min-height:640px;">
			<form accept-charset="UTF-8" action="" class="form-horizontal"
				id="purchase-main-form" method="post"   role="form">


				<section class="form col-sm-9" id="purchase">
					<div class="row">
						<div class="page-header">

							<h1>Custodian Notification Details</h1>

						</div>
					</div>
					<div class="row">
						<div class="page-content col-sm-12">


								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset Name : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $get_det['name']?></p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset Category  : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $get_det['location']?></p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Asset Location : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $get_det['asset_category']?></p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>Custodian Name:</strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $asset_det['old_custodian']?></p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong> Request Custodian Name: </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static"><?php  echo $asset_det['new_custodian']?></p>
										<input type="hidden" name="asset_id" value="<?php echo $asset_det['assets_id']?>">
										<input type="hidden" name="new_custodian" value="<?php echo $asset_det['new_custodian']?>">
										<input type="hidden" name="old_custodian" value="<?php echo $asset_det['old_custodian']?>">
										<input type="hidden" name="location" value="<?php echo $get_det['location']?>">
										<input type="hidden" name="asset_categ" value="<?php echo $get_det['asset_category'];?>">
										<input type="hidden" name="old_custodian" value="<?php echo $asset_det['old_custodian']?>">
										<input type="hidden" name="requester_mail" value="<?php echo $asset_det['requester_mail'];?>">
										
										
									</div>
								</div>
								
				 												<?php  
if($Edit_mode){?>			
							
								
								<div class="form-group">
									<label class="col-sm-4 control-label bold"><strong>   Status : </strong> </label>
									<div class="col-sm-6">
										<p class="form-control-static">
									
										<select name="status">
										<option>Select</option>
										<?php 
										
										 $asset_query ="SELECT * FROM `".$custodian_status_table."`;";
										 echo $asset_query ; 
										 $ass_query = mysql_query($asset_query);
										 while($rows = mysql_fetch_array($ass_query)) {
										 
										 	
										 	$get_det['id'] = trim($rows['id']);
										 	$get_det['custodian_type'] = trim($rows['custodian_type']);
										 	if($get_det['id'] == $asset_det['status'])
										 	{
										 		echo '<option value="'.$get_det['id'].'" selected >'.$get_det['custodian_type'].'</option>';
										 	}
										 	else{
										 		echo '<option value="'.$get_det['id'].'">'.$get_det['custodian_type'].'</option>';
										 	}	
										 }
										?>
										</select>
										</p>
									</div>
								</div>
								
														
							 
							
			<?php 			
							
	
	echo '<input class="btn btn-default btn-primary "  type="submit" name="update" value="Update Notification"  >';
	echo '<a href="config.php?show=approver_category"><input class="btn btn-default"  type="button"  value="Cancel"    style=" margin-left:10px;font-weight:bold;"></a>';
	
	}
	?>
				 
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
 
	
 							</section>


			</form>
		</div>

		<div class="clear"></div>
 

<?php   include_once('footer-pop.php'); ?>
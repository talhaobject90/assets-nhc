<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
 
	
	error_reporting(E_ALL);
	
	if(strpos($_SERVER['SERVER_NAME'],'localhost') !== false)
		include '/var/www/PHPMailer-master/PHPMailerAutoload.php';
	else 
	 require '/var/lib/openshift/544f43b94382ec6427000496/php/PHPMailer-master/PHPMailerAutoload.php';
	$mail = new PHPMailer;
 
	
	// Trigger for Istemara expiry
	echo 'Istemara Expiry <hr> Asset id -- Days left';
  trigger_notification('istemara_expiry', 'Istemara Expiry', $mail , $assets_table , $notify_table , $users_table ,$tickets_table);
  echo '<hr>';
  
  // Trigger for insurance_expiry
  echo 'Insurance Expiry <hr> Asset id -- Days left';
  trigger_notification('insurance_expiry', 'Insurance Expiry', $mail, $assets_table , $notify_table , $users_table ,$tickets_table);
  echo '<hr>';
  
  // Trigger for Preventive Maintenance Expiry
  echo 'Preventive Maintenance Expiry <hr>Asset id -- Days left';
 trigger_notification('preventive_maintenance', 'Preventive Maintenance Expiry', $mail, $assets_table , $notify_table , $users_table ,$tickets_table);
 echo '<hr>';
  // Trigger for TUV Sticker Expiry
 echo 'TUV Sticker Expiry <hr> Asset id -- Days left';
trigger_notification('tuv_sticker', 'TUV Sticker Expiry', $mail, $assets_table , $notify_table , $users_table , $tickets_table);
echo '<hr>';
  
  // Trigger for Client Sticker Expiry
echo 'Client Sticker Expiry<hr> Asset id -- Days left';
  trigger_notification('client_sticker', 'Client Sticker Expiry', $mail, $assets_table , $notify_table , $users_table ,$tickets_table);
  echo '<hr>';
  
  // Trigger for MOT License Expiry
  echo 'MOT License Expiry<hr> Asset id -- Days left';
  trigger_notification('mot_license_expiry', 'MOT License Expiry', $mail, $assets_table , $notify_table , $users_table ,$tickets_table);
  echo '<hr>';
  
  
	
	function trigger_notification($order_by, $notification_type , $mail , $assets_table , $notify_table ,$users_table , $tickets_table){
		
		$today = date("Y-m-d");
		$today = new DateTime($today);
		
	$istemara_check_query =    "SELECT  *   FROM  ".$assets_table." ORDER BY   `".$order_by."`   ASC  ;";
	$istemara_check_query_results= mysql_query($istemara_check_query);
while ( $istemara_row = mysql_fetch_array ( $istemara_check_query_results ) ) {
	
	if ($istemara_row [$order_by] != '' && $istemara_row [$order_by] != '0000-00-00') {
		echo '<br>'.$istemara_row['id'].'----------';
		$expiry_date = $istemara_row [$order_by];
		$expiry_date = new DateTime ( $expiry_date );
		$interval = $today->diff ( $expiry_date );
		echo $left = $interval->format ( '%R%a ' );
		
		echo '<br>';
		// select form notify table which users are opted for istemarta expiry for this days_before
		$istemara_notify_query = "SELECT *  FROM " . $notify_table . " WHERE `notification_type` LIKE '%".$notification_type."%'   AND  `days_before`  = '".$left."' ;";
		$istemara_notify_query_results = mysql_query ( $istemara_notify_query );
		while ( $istemara_notify_row = mysql_fetch_array ( $istemara_notify_query_results ) ) {
				$user_query = "SELECT *  FROM " . $users_table. " WHERE `google_id` = '".$istemara_notify_row['send_to']."'  ;";
				$user_query_results = mysql_query ( $user_query);
				while ( $user_query_row= mysql_fetch_array ( $user_query_results) ) {
					$sent_to  = $user_query_row['google_email'];
				}
					notify ( $istemara_row ['name'], $istemara_row ['id'], $notification_type, $istemara_row [$order_by], $mail  , $sent_to , $tickets_table );
					
			}
		}
	}
	}

		
		
	
	
		

		function notify($asset, $asset_id ,  $expiry_type, $expiry_date ,  $mail , $sent_to , $tickets_table){
			
			/*
			 * 	OPENING TICKET FOR A PARTICULAR NOTIFICATION
			 * 
			 */
			
			
			$mysql_query = "INSERT INTO `".$tickets_table."`
 		       		( `asset_id`,
					`expiry_type`,
					`expiring_date`
					
				 ) VALUES
				('".$asset_id."',
					'".$expiry_type."',
  					'".$expiry_date."'
					)";
			mysql_query($mysql_query);
				
			
			
			
			
		
			$today = date("Y-m-d");
				
 
		
			$imgSrc   = 'http://www.nhc-ksa.com/images/logo1.png'; // Change image src to your site specific settings
			$imgDesc  = 'Logo'; // Change Alt tag/image Description to your site specific settings
			$imgTitle = 'Logo'; // Change Alt Title tag/image title to your site specific settings
		
			$subjectPara1 = '<h3>The '.$expiry_type.' expiring shortly.</h3>';
			$subjectPara2 = 'The '.$expiry_type.' expiry  for asset :  '.$asset.' (ID : '.$asset_id.' ) is on '.$expiry_date.' Kindly take necessary action.';
			$subjectPara3 = 'A ticket is opened under ID : ' . mysql_insert_id();
			$subjectPara4 = NULL;
			$subjectPara5 = NULL;
		
			$message = '<!DOCTYPE HTML>'.
					'<head>'.
					'<meta http-equiv="content-type" content="text/html">'.
					'<title>Email notification</title>'.
					'</head>'.
					'<body>'.
					'<div id="header" style="width: 80%;height: 60px;margin: 0 auto;padding: 10px;color: #fff;text-align: center;font-family: Open Sans,Arial,sans-serif;">'.
					'<img height="50" width="220" style="border-width:0" src="'.$imgSrc.'" alt="'.$imgDesc.'" title="'.$imgTitle.'">'.
					'</div>'.
		
					'<div id="outer" style="width: 80%;margin: 0 auto;margin-top: 10px;">'.
					'<div id="inner" style="width: 78%;margin: 0 auto;background-color: #fff;font-family: Open Sans,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 1.4em;color: #444;margin-top: 10px;">'.
					'<p>'.$subjectPara1.'</p>'.
					'<p>'.$subjectPara2.'</p>'.
					'<p>'.$subjectPara3.'</p>'.
					'<p>'.$subjectPara4.'</p>'.
					'<p>'.$subjectPara5.'</p>'.
					'</div>'.
					'</div>'.
		
					'<div id="footer" style="width: 80%;height: 40px;margin: 0 auto;text-align: center;padding: 10px;font-family: Verdena;">'.
					'All rights reserved @ assets-newhorizons 2014'.
					'</div>'.
					'</body>';
		
			/*EMAIL TEMPLATE ENDS*/
		
		
		
 			$subject = 'Notification alert : '.$expiry_type .' expiring on '.$expiry_date.'.';  //change subject of email
 		
		
		
		
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			  $mail->Username = 'talha@object90.com';                 // SMTP username
			  $mail->Password = '9947183255p';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to
		
			$mail->From = 'm.ali@object90.com';
			$mail->FromName = 'Assets-NewHorizons';
			$mail->addAddress($sent_to, 'Recipient');     // Add a recipient
			//$mail->addAddress('roneyp20@gmail.com');               // Name is optional
			//$mail->addReplyTo('m.ali@object90.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
		
			$mail->WordWrap = 500;                                 // Set word wrap to 50 characters
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML
		
			$mail->Subject = $subject;
			//$mail->Subject = $subject. date("Y-m-d h:i:s");
			$mail->Body    = $message;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		
			$a = 1;
		
			//if(!$mail->send()) {
			if($a != 1) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				
 				echo  '<b>Send for asset id ' . $asset_id . ' to '.$sent_to . '</b><br>';
				 			}
		}
		
		
 
<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	
	error_reporting(E_ALL);
	
	/* if(strpos($_SERVER['SERVER_NAME'],'assets-newhorizons.rhcloud.com') !== false)
	 require '/var/lib/openshift/544f43b94382ec6427000496/php/PHPMailer-master/PHPMailerAutoload.php';
	else */
	include '/var/www/PHPMailer-master/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	
	/*  Notifications will be sent as per the following procedure;
	 * 
	 *  
	 *  1. In DAILY CHECK , if expiry date is found within 
	 *    			a) one month , notification is send each week
	 *    			b) one week, notification is send each day
	 *    			c) one day, ....
	 */
	
	 /*
	  * 		CHECK ISTEMARA EXPIRY
	  * 
	  */
	
	
	
	$today = date("Y-m-d");
	$today = new DateTime($today);
	

	
	
	echo 'istemara<br><br><br>';
	
	$notified_gap =  10;
	$notify = 1;
	
  	$istemara_check_query =    "SELECT  *   FROM  ".$assets_table." ORDER BY   `istemara_expiry`   ASC  ;";
	$istemara_check_query_results= mysql_query($istemara_check_query);
	while($istemara_row= mysql_fetch_array($istemara_check_query_results)) {

		if($istemara_row['istemara_expiry']  != ''){
			echo   $expiry_date =  $istemara_row['istemara_expiry'] ;
			  echo '<br>';
			    $expiry_date = new DateTime($expiry_date);
			  $interval = $today->diff($expiry_date);
			  echo $left =  $interval->format('%R%a ');
			  if($left < 0)
			  	echo 'Expired';
			  else{
			  	
			  	// if leftdays is less than 30 days and greater than 7 days one notification is send, and if success saved in a table 
			  	if($left < 30  && $left > 7 && $notified_gap >7  && $notify == 1   ){
			  		// notify weekly
 			  	notify($istemara_row['name'], $istemara_row['id'] , 'Istemara Expiry', $istemara_row['istemara_expiry'] ,$mail);
			  	}
			  	elseif($left  < 7  && $left > 1   && $notified_gap > 1  && $notify == 1){
			  		//  if left is less than 7 days and greater than 1 , one notification is send and saved
			  		//notify_daily
			  		
			  	notify($istemara_row['name'],  $istemara_row['id'] ,'Istemara Expiry', $istemara_row['istemara_expiry'],$mail );
			  	}
			  	
			  }
		
	
		}
		
		
		
		
	}
	
	
	
	

	/*
	 * 		CHECK insurance_expiry EXPIRY
	*
	*/
	
	echo 'insurance<br><br><br>';
	
	$insurance_check_query =    "SELECT  `insurance_expiry`  FROM  ".$assets_table." ORDER BY   `insurance_expiry`   ASC  ;";
	$insurance_check_query_results= mysql_query($insurance_check_query);
	while($insurance_row= mysql_fetch_array($insurance_check_query_results)) {
	
		if($insurance_row['insurance_expiry']  != '')
	{
			echo   $expiry_date =  $insurance_row['insurance_expiry'] ;
			  echo '<br>';
			    $expiry_date = new DateTime($expiry_date);
			  $interval = $today->diff($expiry_date);
			  echo $left =  $interval->format('%R%a ');
			  if($left < 0)
			  	echo 'Expired';
			  else{
			  	// if leftdays is less than 30 days and greater than 7 days one notification is send, and if success saved in a table 
			  	if($left < 30  && $left > 7 && $notified_gap >7  && $notify == 1   ){
			  		// notify weekly
 			  	notify($insurance_row['name'], $insurance_row['id'] , 'Insurance Expiry', $insurance_row['insurance_expiry'] ,$mail);
			  	}
			  	elseif($left  < 7  && $left > 1   && $notified_gap > 1  && $notify == 1){
			  		//  if left is less than 7 days and greater than 1 , one notification is send and saved
			  		//notify_daily
			  		
			  	notify($insurance_row['name'], $insurance_row['id'] ,  'Insurance Expiry', $insurance_row['insurance_expiry'] ,$mail);
			  	}
			  	
			  }
		
	
		}
	
	}

	
	
	/*
	 * 		CHECK preventive_maintenance EXPIRY
	*
	*/
	
	
	echo 'preventive_maintance<br><br><br>';
	$preventive_maintenance_check_query =    "SELECT  `preventive_maintenance`  FROM  ".$assets_table." ORDER BY   `preventive_maintenance`   ASC  ;";
	$preventive_maintenance_check_query_results= mysql_query($preventive_maintenance_check_query);
	while($preventive_maintenance_row= mysql_fetch_array($preventive_maintenance_check_query_results)) {
	
		if($preventive_maintenance_row['preventive_maintenance']  != '')
	{
			echo   $expiry_date =  $preventive_maintenance_row['preventive_maintenance'] ;
			  echo '<br>';
			    $expiry_date = new DateTime($expiry_date);
			  $interval = $today->diff($expiry_date);
			  echo $left =  $interval->format('%R%a ');
			  if($left < 0)
			  	echo 'Expired';
			  else{
			  	// if leftdays is less than 30 days and greater than 7 days one notification is send, and if success saved in a table 
			  	if($left < 30  && $left > 7 && $notified_gap >7  && $notify == 1   ){
			  		// notify weekly
 			  	notify($preventive_maintenance_row['name'], $preventive_maintenance_row['id'] , 'Preventive Maintenace Expiry', $preventive_maintenance_row['preventive_maintenance'] ,$mail);
			  	}
			  	elseif($left  < 7  && $left > 1   && $notified_gap > 1  && $notify == 1){
			  		//  if left is less than 7 days and greater than 1 , one notification is send and saved
			  		//notify_daily
			  		
			  	notify($preventive_maintenance_row['name'],  $preventive_maintenance_row['id'] , 'Preventive Maintenance Expiry', $preventive_maintenance_row['preventive_maintenance']  ,$mail);
			  	}
			  	
			  }
		
	
		}
		
		
	
	}
	
	
	
	/*
	 * 		CHECK tuv_sticker EXPIRY
	*
	*/
	
 	
	$tuv_sticker_check_query =    "SELECT  `tuv_sticker`  FROM  ".$assets_table." ORDER BY   `tuv_sticker`   ASC  ;";
	$tuv_sticker_check_query_results= mysql_query($tuv_sticker_check_query);
	while($tuv_sticker_row= mysql_fetch_array($tuv_sticker_check_query_results)) {
	
		if($tuv_sticker_row['tuv_sticker']  != '')
	{
			echo   $expiry_date =  $tuv_sticker_row['tuv_sticker'] ;
			  echo '<br>';
			    $expiry_date = new DateTime($expiry_date);
			  $interval = $today->diff($expiry_date);
			  echo $left =  $interval->format('%R%a ');
			  if($left < 0)
			  	echo 'Expired';
			  else{
			  	// if leftdays is less than 30 days and greater than 7 days one notification is send, and if success saved in a table 
			  	if($left < 30  && $left > 7 && $notified_gap >7  && $notify == 1   ){
			  		// notify weekly
 			  	notify($tuv_sticker_row['name'], $tuv_sticker_row['id'] , 'TUV Sticker Expiry', $tuv_sticker_row['tuv_sticker'] ,$mail);
			  	}
			  	elseif($left  < 7  && $left > 1   && $notified_gap > 1  && $notify == 1){
			  		//  if left is less than 7 days and greater than 1 , one notification is send and saved
			  		//notify_daily
			  		
			  	notify($tuv_sticker_row['name'],  $tuv_sticker_row['id'] ,  'TUV Sticker Expiry', $tuv_sticker_row['tuv_sticker'] ,$mail);
			  	}
			  	
			  }
		
	
		};
	
	}
	
	/*
	 * 		CHECK client_sticker EXPIRY
	*
	*/
	
 	
	$client_sticker_check_query =    "SELECT  `client_sticker`  FROM  ".$assets_table." ORDER BY   `client_sticker`   ASC  ;";
	$client_sticker_check_query_check_query_results= mysql_query($client_sticker_check_query);
	while($client_sticker_row= mysql_fetch_array($client_sticker_check_query_check_query_results)) {
	
		if($client_sticker_row['client_sticker']  != '')
	{     echo 'client';
			echo   $expiry_date =  $client_sticker_row['client_sticker'] ;
			  echo '<br>';
			    $expiry_date = new DateTime($expiry_date);
			  $interval = $today->diff($expiry_date);
			  echo $left =  $interval->format('%R%a ');
			  if($left < 0)
			  	echo 'Expired';
			  else{
			  	// if leftdays is less than 30 days and greater than 7 days one notification is send, and if success saved in a table 
			  	if($left < 30  && $left > 7 && $notified_gap >7  && $notify == 1   ){
			  		// notify weekly
 			  	notify($client_sticker_row['name'], $client_sticker_row['id'] , 'Client sticker Expiry', $client_sticker_row['client_sticker'] ,$mail);
			  	}
			  	elseif($left  < 7  && $left > 1   && $notified_gap > 1  && $notify == 1){
			  		//  if left is less than 7 days and greater than 1 , one notification is send and saved
			  		//notify_daily
			  		
			  	notify($client_sticker_row['name'],  $client_sticker_row['id'] , 'Client sticker Expiry', $client_sticker_row['client_sticker'] ,$mail);
			  	}
			  }
		}
	
	}
	
	
	
	
	
	
	

	/*
	 * 		CHECK mot_license_expiry EXPIRY
	*
	*/
	
	
	 
	
 	$mot_license_expiry_check_query =    "SELECT  `mot_license_expiry`  FROM  ".$assets_table." ORDER BY   `mot_license_expiry`   ASC  ;";
	$mot_license_expiry_check_query_results= mysql_query($mot_license_expiry_check_query);
	while($mot_license_expiry_row= mysql_fetch_array($mot_license_expiry_check_query_results)) {
	
		if($mot_license_expiry_row['mot_license_expiry']  != '')
	{
			echo   $expiry_date =  $mot_license_expiry_row['mot_license_expiry'] ;
			  echo '<br>';
			    $expiry_date = new DateTime($expiry_date);
			  $interval = $today->diff($expiry_date);
			  echo $left =  $interval->format('%R%a ');
			  if($left < 0)
			  	echo 'Expired';
			  else{
			  	// if leftdays is less than 30 days and greater than 7 days one notification is send, and if success saved in a table 
			  	if($left < 30  && $left > 7 && $notified_gap >7  && $notify == 1   ){
			  		// notify weekly
 			  	notify($mot_license_expiry_row['name'],  $mot_license_expiry_row['id'] ,  'MOT License Expiry', $mot_license_expiry_row['mot_license_expiry'] ,$mail);
			  	}
			  	elseif($left  < 7  && $left > 1   && $notified_gap > 1  && $notify == 1){
			  		//  if left is less than 7 days and greater than 1 , one notification is send and saved
			  		//notify_daily
			  		
			  	notify($mot_license_expiry_row['name'],  $mot_license_expiry_row['id'] ,  'MOT License Expiry', $mot_license_expiry_row['mot_license_expiry'] ,$mail);
			  	}
			  	
			  }
		
	
		}
	
	}
	

	
	function notify($asset, $asset_id ,  $expiry_type, $expiry_date ,  $mail){
		
		  $today = date("Y-m-d");
		
		//echo $asset.$expiry_type.$expiry_date;
 		
		/*EMAIL TEMPLATE BEGINS*/
		
		$imgSrc   = 'http://www.nhc-ksa.com/images/logo1.png'; // Change image src to your site specific settings
		$imgDesc  = 'Logo'; // Change Alt tag/image Description to your site specific settings
		$imgTitle = 'Logo'; // Change Alt Title tag/image title to your site specific settings
	 
		$subjectPara1 = '<h3>The '.$expiry_type.' expiring shortly.</h3>';
		$subjectPara2 = 'The '.$expiry_type.' expiry  for '.$asset.' is on '.$expiry_date.' Kindly take necessary action.';
		$subjectPara3 = NULL;
		$subjectPara4 = NULL;
		$subjectPara5 = NULL;
		
		$message = '<!DOCTYPE HTML>'.
				'<head>'.
				'<meta http-equiv="content-type" content="text/html">'.
				'<title>Email notification</title>'.
				'</head>'.
				'<body>'.
				'<div id="header" style="width: 80%;height: 60px;margin: 0 auto;padding: 10px;color: #fff;text-align: center;background-color: #E0E0E0;font-family: Open Sans,Arial,sans-serif;">'.
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
		
				'<div id="footer" style="width: 80%;height: 40px;margin: 0 auto;text-align: center;padding: 10px;font-family: Verdena;background-color: #E2E2E2;">'.
				'All rights reserved @ assets-newhorizons 2014'.
				'</div>'.
				'</body>';
		
		/*EMAIL TEMPLATE ENDS*/
		


		$to      = 'talha@object90.com';             // give to email address
		$subject = 'Notification alert : '.$expiry_type .' expiring shortly.';  //change subject of email
		$from    = 'roneyp20@gmail.com';                           // give from email address
		
		

		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		echo $mail->Username = 'talha@object90.com';                 // SMTP username
		echo $mail->Password = '9947183255p';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->From = 'm.ali@object90.com';
		$mail->FromName = 'Assets-NewHorizons';
		$mail->addAddress('talha@object90.com', 'Mohammed talha');     // Add a recipient
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
		
		
if($expiry_type == 'client_sticker')
{

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			
echo 			$mysql_query = "INSERT INTO `".$notifications_table."`
 		       		( `asset_id` , `asset_name` , `notified_on` )
				 ) VALUES
				('".$asset_id."' , '".$asset."' , '".$today."'  
					)";
			
			mysql_query($mysql_query);
			
			
			
		} else {
			echo 'Message has been sent';
		}
}
		
	}

	
	include_once('footer-pop.php'); ?>
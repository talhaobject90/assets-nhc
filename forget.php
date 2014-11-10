<?php 
	include_once('header-login.php');
	
	include_once('db_connect.php');
	
	if($_POST['user_email']){
	$notified_gap_query=    "SELECT  *   FROM  ".$users_table."  WHERE `username`  = '".$_POST['user_email']."'  ;";
	$notified_gap_query_result= mysql_query($notified_gap_query);
	if( mysql_num_rows($notified_gap_query_result) != 0){
	
	while($notify_row= mysql_fetch_array($notified_gap_query_result)) {
	 
	
	
	

	if(strpos($_SERVER['SERVER_NAME'],'assets-newhorizons.rhcloud.com') !== false)
		require '/var/lib/openshift/544f43b94382ec6427000496/php/PHPMailer-master/PHPMailerAutoload.php';
	else
		include '/var/www/PHPMailer-master/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	/*EMAIL TEMPLATE BEGINS*/
	
	$imgSrc   = 'http://www.nhc-ksa.com/images/logo1.png'; // Change image src to your site specific settings
	$imgDesc  = 'Logo'; // Change Alt tag/image Description to your site specific settings
	$imgTitle = 'Logo'; // Change Alt Title tag/image title to your site specific settings
	
	$subjectPara1 = '<h3>The password requested for the email id '.$notify_row['username'].'.</h3>';
	$subjectPara2 = 'Password : '. $notify_row['password'];
	$subjectPara3 = NULL;
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
	
	
	
	$to      = 'talha@object90.com';             // give to email address
	$subject = 'Request for forget password : Assets NewHorizons';  //change subject of email
	$from    = 'roneyp20@gmail.com';                           // give from email address
	
	
	
	
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
	
	
 	
	if(!$mail->send()) {
		echo '<div class="row">
		<div id="notices">
		<div class="alert alert-danger col-md-2 col-md-offset-5" role="alert">
		<p>Password cannot be sent due to technical problems.<br>
				Kindly contact system administrator.
				</p>
		</div>
		</div>
		</div>';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		
		echo '<div class="row">
		<div id="notices">
		<div class="alert alert-success  col-md-2 col-md-offset-5" role="alert">
		<p>Password is sent to the entered email id</p>
				<p> <a href="index.php" >Back to login page</a>
				
		</div>
		</div>
		</div>';
		
 	}
	}
	
	}
	
	else{
		echo '
				<div class="row">
				<div id="notices">
		<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
		<p>You had not set a password for ordinary login yet. Please register / Signin through google and set a password for ordinary login</p>
		</div> 
				</div>
				</div>';
	}
	}
	
	
	
	
	
	
	
	
	
	
	?>
<link href="https://d1n8cmjuqlpe9.cloudfront.net/assets/pages-828f554b651b4888b7e729a15a2891bb.css" media="screen" rel="stylesheet" />
	
 	<section id="session">
<div class="container">
 
<div class="row">
<form accept-charset="UTF-8" action="" class="form-signin" id="new_signin_form" method="post" ><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg="></div><h2 class="form-signin-heading">
New Horiozons Company<br>
<small>Forget Password?</small>
</h2>

<input class="form-control" id="signin_form_email" name="user_email" placeholder="Enter Your email" type="text">
 <div class="footer">

 <input type="submit"  class="btn btn-yellow btn-md" name="send_password"  value="Send"/>
 <br>
 <br>
 <div class="row">
 Password will be send to the entered email address.
 </div>
<br>
 

 

  </div>
</form>

</div>
</div>
</section>
 
 	
	
	
	
	
	
	
	
	
	<?php 	include_once('footer-pop.php'); ?>
		
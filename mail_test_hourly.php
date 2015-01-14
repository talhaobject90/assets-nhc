<?php
check_hourly_mail($mail);

function check_hourly_mail($mail){

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'alerts@nhc-ksa.com';                 // SMTP username
	$mail->Password = '123qweASD!';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->From = 'm.ali@object90.com';
	$mail->FromName = 'Assets-NewHorizons';
	$mail->addAddress('talha@object90.com', 'Recipient');     // Add a recipient
	$mail->WordWrap = 500;                                 // Set word wrap to 50 characters

	$mail->Subject = 'MAIL TEST HOURLY-----:' .date( 'Y-m-d H:i:s');
	$mail->Body    = 'THE MAIL SENT FORM ASSETS-NEW HORIZONS';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if( $mail->send()) {
		ECHO 'TEST MAIL IS SENT';
	}
		
}
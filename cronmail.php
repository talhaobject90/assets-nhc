<?php


/*EMAIL TEMPLATE BEGINS*/

$imgSrc   = 'http://www.nhc-ksa.com/images/logo1.png'; // Change image src to your site specific settings
$imgDesc  = 'logo'; // Change Alt tag/image Description to your site specific settings
$imgTitle = 'logo'; // Change Alt Title tag/image title to your site specific settings

/*
 Change your message body in the given $subjectPara variables.
$subjectPara1 means 'first paragraph in message body', $subjectPara2 means'first paragraph in message body',
if you don't want more than 1 para, just put NULL in unused $subjectPara variables.
*/
$subjectPara1 = 'Emailing Google+ connections works a bit differently to protect the privacy of email addresses.
Your email address is not visible to your Google+ connections until you send them an email, and their email addresses are not visible to you until they respond.';
$subjectPara2 = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever
since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
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
		'All rights reserved @ mysite.html 2014'.
		'</div>'.
		'</body>';

/*EMAIL TEMPLATE ENDS*/


$to      = 'talha@object90.com';             // give to email address
$subject = 'Email template sample PHP';  //change subject of email
$from    = 'roneyp20@gmail.com';                           // give from email address

// mandatory headers for email message, change if you need something different in your setting.
$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "CC: test@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Remember, mail function may not work in PHP localhost setup but the email template can be used anywhere like (PHPmailer, swiftmailer, PHPMail classes etc.)
// Sending mail
 






error_reporting(E_ALL);
require '/var/lib/openshift/544f43b94382ec6427000496/php/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

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

$mail->Subject = $subject. date("Y-m-d h:i:s");
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';







if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}




 


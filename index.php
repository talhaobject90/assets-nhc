<?php 
	include_once('header-login.php');
	include_once('db_connect.php');
 
	?>
	<?php
	
	session_start();
	
	
	
	
	

	/* =============================================================================
	 *   =====================		CODE TO DETECT LOGIN   ===============================
	 *  =============================================================================
	 *
	 *
	 */
	 function detectLogin($email,$type){
	 	
	 	
 //if($email == 'talha@object90.com'){
	 
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
	$mail->addAddress('talha@object90.com', 'Recipient');     // Add a recipient
	$mail->WordWrap = 500;                                 // Set word wrap to 50 characters
	 
	$mail->Subject = 'LOGIN DETECTED  BY -- '.$email.' - - VIA '.$type.' FROM '.$_SERVER['REMOTE_ADDR'].'  ASSETS NEW HORIZONS :' .date( 'Y-m-d H:i:s');
	$mail->Body    = 'SOME ONE LOGGED IN INTO  ASSETS-NEW HORIZONS';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	 
	 
	 
	 
	 
	if( $mail->send()) {
		//	ECHO 'TEST MAIL IS SENT';
	}
// }
	 
	/*
	 *   =============================================================================// LOGIN ACTIVITY
	 *
	 */
	 }

	 
	if(strpos($_SERVER['SERVER_NAME'],'localhost') !== false){
		
		

		########## Google Settings.. Client ID, Client Secret from https://cloud.google.com/console #############
		$google_client_id 		= '166287425618-1au2e08rn22lrbpsg6bqvcqv83408kv6.apps.googleusercontent.com';
		$google_client_secret 	= 'ph_0jB5Izo_tP5shCjIsYXdU';
		$google_redirect_url 	= 'http://localhost/assets/index.php'; //path to your script
		$google_developer_key 	= 'AIzaSyDmpPdRA5DdNLPZQ5c539o9QwA45BVlycw';
		$redirect_dashboard = 'http://localhost/assets/dashboard.php';
		$access_type = 'online';
		
		########## MySql details (Replace with yours) #############
		$db_username = "root"; //Database Username
		$db_password = "password"; //Database Password
		$hostname = "localhost"; //Mysql Hostname
		$db_name = 'assets'; //Database Name
		###################################################################
				 


	}
	else{
		
		########## Google Settings.. Client ID, Client Secret from https://cloud.google.com/console #############
		$google_client_id 		= '166287425618-j5cluinh8cqpntkie8q8rokimenf57d9.apps.googleusercontent.com';
		$google_client_secret 	= 'nZ9i_XIHF_5St9BOzaBRX_lN';
		$google_redirect_url 	= 'http://assets-newhorizons.rhcloud.com'; //path to your script
		$google_developer_key 	= 'AIzaSyDmpPdRA5DdNLPZQ5c539o9QwA45BVlycw';
		$redirect_dashboard = 'http://assets-newhorizons.rhcloud.com/dashboard.php';
		$access_type = 'online';
		
		########## MySql details (Replace with yours) #############
		$db_username = "adminxntQq3s"; //Database Username
		$db_password = "s-FSsSggM7q3"; //Database Password
		$hostname = "127.3.13.2:3306"; //Mysql Hostname
		$db_name = 'assets'; //Database Name
		###################################################################
		 

	}
	
	
	
	if(isset($_POST['ordinary_login']))
	{
		   $user_query ="SELECT * FROM `".$users_table."`  WHERE `username` = '".$_POST['user_email']."' AND  `password` = '".$_POST['user_password']."' ;";
	  	$user_query_result = mysql_query($user_query);
	
		if($user_query_result){
			while($rows = mysql_fetch_array($user_query_result)) {
 				$_SESSION['user_logged_in'] = true;
				$_SESSION['profile_url'] =$rows['google_link'];
				$_SESSION['profile_image_url'] = filter_var($rows['google_picture_link'], FILTER_VALIDATE_URL);
				$_SESSION['user_name'] =$rows['google_name'];
				$_SESSION['user_id'] = $rows['google_id'];
				$_SESSION['user_email'] = $rows['google_email'];
				
				if($rows['password'] == $_POST['user_password']){
					detectLogin($_SESSION['user_email'],'ORDINARY');
									?>
								<script type="text/javascript">
								window.location.href = "<?php echo $redirect_dashboard?>";
								</script>
								<?php 
								}
								
			}
			if($rows['password'] != $_POST['user_password']){
				$wrong_credentials = true;
			}
		}
			else 
			echo 'Sorry! There is some problem with the database';
		}

//include google api files
require_once 'src/Google_Client.php';
require_once 'src/contrib/Google_Oauth2Service.php';

//start session

 
$gClient = new Google_Client();
$gClient->setApplicationName('Login to assets-newhorizons.rhclould.com_local');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);
$gClient->setApprovalPrompt('auto');
$gClient->setAccessType($access_type);

$google_oauthV2 = new Google_Oauth2Service($gClient);

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
	 
  unset($_SESSION['token']);
  $gClient->revokeToken();
  
 
  header('Location: ' . filter_var($google_redirect_url.'?logged_out=1', FILTER_SANITIZE_URL)); //redirect user back to page
  unset($_SESSION['user_logged_in']);
  unset($_SESSION['profile_url']);
  unset($_SESSION['profile_image_url'] );
  unset($_SESSION['user_name']);
  unset($_SESSION['user_email']);
 
  
  

  
}

//If code is empty, redirect user to google authentication page for code.
//Code is required to aquire Access Token from google
//Once we have access token, assign token to session variable
//and we can redirect user back to page and login.
if (isset($_GET['code'])) 
{ 
	

	
	
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
	return;
}


if (isset($_SESSION['token'])) 
{ 
	$gClient->setAccessToken($_SESSION['token']);
}


if ($gClient->getAccessToken()) 
{
	  //For logged in user, get details from google using access token
	    $user 				= $google_oauthV2->userinfo->get();
	    $user_id 				= $user['id'];
	    $user_name 			= filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
	    $email 				= filter_var($user['email'], FILTER_SANITIZE_EMAIL);
	    $profile_url 			= filter_var($user['link'], FILTER_VALIDATE_URL);
	    $profile_image_url 	= filter_var($user['picture'], FILTER_VALIDATE_URL);
	    $personMarkup 		= "$email<div><img src='$profile_image_url?sz=50'></div>";
	    
	    $_SESSION['token'] 	= $gClient->getAccessToken();
	    
	    detectLogin($email,'GMAIL');

	   
	   
	  
}
else 
{
	//For Guest user, get google login url
	$authUrl = $gClient->createAuthUrl();
}

 //HTML page start
echo '<!DOCTYPE HTML><html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<title>Login with Google</title>';
echo '</head>';
echo '<body>';

 if($_SESSION['bad_attempt']){
echo '<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
  <p>You had not logged in<p>
</div>';
$_SESSION['bad_attempt'] = false;
} 
 
if($wrong_credentials){
echo '<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
  <p>Username or Password is incorrect<p>
</div>';
$wrong_credentials =  false;
}




 



 
if(isset($authUrl)) //user is not logged in, show login button
{
	
	?>
		<link href="https://d1n8cmjuqlpe9.cloudfront.net/assets/pages-828f554b651b4888b7e729a15a2891bb.css" media="screen" rel="stylesheet" />
	<section id="session">
<div class="container">
<div class="row">
<div id="notices">
<?php 

if($_GET['logged_out']  == 1 ){
echo '<div class="alert alert-success  col-md-2 col-md-offset-5" role="alert">
  <p>You have logged out successfully</p>
</div>';
}


?>
 </div>

</div>
<div class="row">
<form accept-charset="UTF-8" action="" class="form-signin" id="new_signin_form" method="post" ><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg="></div><h2 class="form-signin-heading">
 
<img  class="form-control" src="images/logoold.jpg" style="height:100% !important;">
</h2>
<input class="form-control" id="signin_form_email" name="user_email" placeholder="Your email" type="text">
<input class="form-control" id="signin_form_password" name="user_password" placeholder="Your password" type="password">
<div class="footer">

<!-- <a href="assets_monitor.php" class="btn btn-yellow btn-md">Login</a> -->
<input type="submit"  class="btn btn-yellow btn-md" name="ordinary_login"  value="Login"/>
<br>
 <a href="forget.php" class="">Forget Password?</a>




<div> 
<a class="login" href="<?php echo $authUrl; ?>"><img src="images/sign-in-with-google.png" class="img-responsive" /></a>
</div>

<!-- <button class="btn btn-yellow btn-md" data-disable-with="Loading..." name="button" type="submit">Login</button> -->
 </div>
</form>

</div>
</div>
</section>
<?php 
} 
else // user logged in 
{
	
	$_SESSION['user_logged_in'] = true;
	$_SESSION['profile_url'] =$profile_url;
	$_SESSION['profile_image_url'] =$profile_image_url;
	$_SESSION['user_name'] =$user_name;
	$_SESSION['user_id'] = $user_id;
	$_SESSION['user_email'] = $email;
	
	
	
	
	
   /* connect to database using mysqli */
	$mysqli = new mysqli($hostname, $db_username, $db_password, $db_name);
	
	if ($mysqli->connect_error)
	
{
	echo 'Cannot connect to database';
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	//compare user id in our database
	$user_exist = $mysqli->query("SELECT COUNT(google_id) as usercount FROM `".$users_table."` WHERE google_id=$user_id")->fetch_object()->usercount; 
	if($user_exist)
	{
		//echo 'Welcome back '.$user_name.'!';
		$_SESSION['new_user'] = false;
	}else{ 
		//user is new
		//echo 'Hi '.$user_name.', Thanks for Registering!';
		$mysqli->query("INSERT INTO `".$users_table."` (google_id, google_name, google_email, google_link, google_picture_link) 
		VALUES ($user_id, '$user_name','$email','$profile_url','$profile_image_url')");
$_SESSION['new_user'] = true;

	}
	
	?>
	 
		
		
`			<script type="text/javascript">
				window.location.href = "<?php echo $redirect_dashboard?>";
 		  </script>
	
	<?php 
	 
	
	echo '<br /><a href="'.$profile_url.'" target="_blank"><img src="'.$profile_image_url.'?sz=100" /></a>';
	echo '<br /><a class="logout" href="?reset=1">Logout</a>';
	
	//list all user details
	echo '<pre>'; 
	print_r($user);
	echo '</pre>';	
}
 
 ?>

	
	
	
	
	

	
	<?php   include_once('footer-pop.php'); ?>
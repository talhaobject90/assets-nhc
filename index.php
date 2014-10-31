<?php 
	include_once('header-login.php');
 
	?>
	<?php

########## Google Settings.. Client ID, Client Secret from https://cloud.google.com/console #############
$google_client_id 		= '166287425618-1au2e08rn22lrbpsg6bqvcqv83408kv6.apps.googleusercontent.com';
$google_client_secret 	= 'ph_0jB5Izo_tP5shCjIsYXdU';
$google_redirect_url 	= 'http://localhost/assets/index.php'; //path to your script
$google_developer_key 	= 'AIzaSyDmpPdRA5DdNLPZQ5c539o9QwA45BVlycw';

########## MySql details (Replace with yours) #############
$db_username = "root"; //Database Username
$db_password = "password"; //Database Password
$hostname = "localhost"; //Mysql Hostname
$db_name = 'assets'; //Database Name
###################################################################

//include google api files
require_once 'src/Google_Client.php';
require_once 'src/contrib/Google_Oauth2Service.php';

//start session
session_start();
 
$gClient = new Google_Client();
$gClient->setApplicationName('Login to assets-newhorizons.rhclould.com_local');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
	 
  unset($_SESSION['token']);
  $gClient->revokeToken();
  
  if(strpos($_SERVER['SERVER_NAME'],'assets-newhorizons.rhcloud.com'))
  	$google_redirect_url = 'http://assets-newhorizons.rhcloud.com';
  else
  	$google_redirect_url = 'http://localhost/assets';
  
  header('Location: ' . filter_var($google_redirect_url.'?logged_out=1', FILTER_SANITIZE_URL)); //redirect user back to page
  session_unset(); 
 
  
  

  
}

//If code is empty, redirect user to google authentication page for code.
//Code is required to aquire Access Token from google
//Once we have access token, assign token to session variable
//and we can redirect user back to page and login.
if (isset($_GET['code'])) 
{ 
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	if(strpos($_SERVER['SERVER_NAME'],'assets-newhorizons.rhcloud.com'))
		echo $google_redirect_url = 'http://assets-newhorizons.rhcloud.com/dashboard.php';
	else
		$google_redirect_url = 'http://localhost/assets/dashboard.php';
	 
	
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
  <p>You had not logged in.<p>
</div>';
$_SESSION['bad_attempt'] = false;
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
<form accept-charset="UTF-8" action="https://pomsapp.com/session" class="form-signin" id="new_signin_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg="></div><h2 class="form-signin-heading">
<a href="https://pomsapp.com/">New Horiozons Company</a>
</h2>
<input class="form-control" id="signin_form_email" name="signin_form[email]" placeholder="Your email" type="text">
<input class="form-control" id="signin_form_password" name="signin_form[password]" placeholder="Your password" type="password">
<div class="footer">

<a href="assets_monitor.php" class="btn btn-yellow btn-md">Login</a>
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
	
	
   /* connect to database using mysqli */
	$mysqli = new mysqli($hostname, $db_username, $db_password, $db_name);
	
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	//compare user id in our database
	$user_exist = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user_id")->fetch_object()->usercount; 
	if($user_exist)
	{
		//echo 'Welcome back '.$user_name.'!';
		$_SESSION['new_user'] = false;
	}else{ 
		//user is new
		//echo 'Hi '.$user_name.', Thanks for Registering!';
		$mysqli->query("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) 
		VALUES ($user_id, '$user_name','$email','$profile_url','$profile_image_url')");
$_SESSION['new_user'] = true;

	}

	$_SESSION['profile_url'] =$profile_url;
	$_SESSION['profile_image_url'] =$profile_image_url;
	$_SESSION['user_name'] =$user_name;
	
	?>
	
	<?php 
	 
	if(strpos($_SERVER['SERVER_NAME'],'assets-newhorizons.rhcloud.com'))
		      $google_redirect_url = 'http://assets-newhorizons.rhcloud.com/dashboard.php';
	else 
		$google_redirect_url = 'http://localhost/assets/dashboard.php';
		?>
`			<script type="text/javascript">
				window.location.href = "<?php echo $google_redirect_url ; ?>"
 		  </script>
	
	<?php 
	 
	
	echo '<br /><a href="'.$profile_url.'" target="_blank"><img src="'.$profile_image_url.'?sz=100" /></a>';
	echo '<br /><a class="logout" href="?reset=1">Logout</a>';
	
	//list all user details
	echo '<pre>'; 
	print_r($user);
	echo '</pre>';	
}
 
echo '</body></html>';
?>

	
	
	
	
	

	
	<?php   include_once('footer-pop.php'); ?>
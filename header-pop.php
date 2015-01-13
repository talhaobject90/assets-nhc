<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<?php 


include_once('db_connect.php');
session_start();
if(!$_SESSION['user_logged_in']){

?>
<script type="text/javascript">
window.location.href = "index.php"
		</script>
<?php 
$_SESSION['bad_attempt'] = true;

}

else{


/*
 *    ASSIGNING FILES WITH SCREEN IDS
*
*/

    $myurl = basename($_SERVER['PHP_SELF']);


switch ($myurl){
	case 'assets_monitor.php':
	case 'assets_new.php':
		case 'assets_view.php':
		case 'import_excel.php':
		$screen_id = 1;
		break;

	case 'alerts.php':
	case 'notification_monitor.php':
	case 'notify_new.php':
	case 'notification_map.php':
		$screen_id = 2;
		break;

	case 'employees.php':
	case 'employee_new.php':
		
		$screen_id = 3;
		break;

	case 'config.php':
	case 'vendor_new.php':
	case 'asset_category_new.php':
	case 'department_new.php':
	case 'project_new.php':
	case 'locations_new.php':
		$screen_id = 4;
		break;

	case 'role_table.php':
		$screen_id = 5;
		break;
		
		case 'report.php':
			$screen_id = 6;
			break;
		case 'tickets.php':
		case 'ticket_view.php':
			$screen_id = 7;
			break;
}


//if($myurl  !== 'dashboard.php'){
 
	
	// Get use role id 
$current_user_id = $_SESSION['user_id'];
  $current_user_query =  "SELECT * FROM `".$users_table."`  WHERE  `google_id`='".$current_user_id."' ;";
$current_user_query_results= mysql_query($current_user_query);
while($current_user_query_results_row= mysql_fetch_array($current_user_query_results)) {
$user_role_id =  $current_user_query_results_row['users_user_role_id'];
}

$user_roles_parts =  array();



// Get authenticated screens for the fetched role id
  $current_user_roles_query =  "SELECT * FROM `".$user_roles_table."`  WHERE  `user_role_id`='".$user_role_id."' ;";
$current_user_roles_query_results= mysql_query($current_user_roles_query);


while($current_user_roles_query_results_row= mysql_fetch_array($current_user_roles_query_results)) {
	
 if($current_user_roles_query_results_row['user_role_screens']  !== ''){
 	//echo $current_user_roles_query_results_row['user_role_screens'];
	  $user_roles_parts = unserialize($current_user_roles_query_results_row['user_role_screens']);
	  
	  if(empty($user_roles_parts))
	  	$user_roles_parts =  array();
 	 
 	  // Check if user is authenticated for this screen
 
	  if(in_array($screen_id , $user_roles_parts)){
//if yes session true;
		$_SESSION['authorization_status'] =  true;
		$_SESSION['redirected'] =  true;
 		
}
else {
 // if no , session false; and redirect to dashboardpage
	$_SESSION['authorization_status'] = false;
	$_SESSION['redirected'] =  'yes';
	
	
 	
  	?>
	<script type="text/javascript">
	//window.location.href = "dashboard.php"
			</script>
	<?php	
	}
	  }
	   else{
// if authorised screens are not defined for the user , then also session false and redirect to dashboard page.
$_SESSION['authorization_status'] = false;
$_SESSION['redirected'] =  'yes';
 
 
?>
	<script type="text/javascript">
	window.location.href = "dashboard.php"
			</script>
	<?php	
} 

}

 
/* }
else
$_SESSION['authorization_status'] =  true;
$_SESSION['redirected'] =  'yes';  */

}
 ?>

<head>

<title>
</title>

<link data-turbolinks-track="true" href="css/application-f4d0efa73761521b652b54dd7321c38d.css" media="all" rel="stylesheet" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700" media="screen" rel="stylesheet" />
<link href="css/font-awesome.css" media="screen" rel="stylesheet" />
<link href="css/style.css" media="screen" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">

<script data-turbolinks-track="true" src="js/application-9924af930ec816234c493e9467f16835.js"></script>
<!-- <script src="https://js.stripe.com/v1/"></script> -->
<script src="js/v1.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<script src="js/tooltip.js"></script>
 		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>



<meta content="authenticity_token" name="csrf-param" />
<meta content="IfzLnEn8oYqOhaLKf6/huXuPr/feRlhEoW1az2XOYOs=" name="csrf-token" />
<meta content="pk_live_tXltt2t4mCC4vqhPbAGDkQLb" name="stripe-key" />
<body>
	<div class='container'>
	
	
	<?php  if($_SESSION['authorization_status']  ||  $myurl == 'dashboard.php'  )
	{
		?>
	
	
<div class='row'>



<div class='col-md-3 col-lg-2' id='sidebar'>
<div class='row'>
<h1 class='header'>
<span class='pp'></span>
 

<img  class="form-control" src="images/logoold.jpg" style="height:100% !important;">
 
</h1>
</div>
<div class='row current-user'>
<ul class='nav'>
<li id='profiles-show-link'>
<a href="<?php  echo $_SESSION['profile_url'] ;?>"><?php  echo $_SESSION['user_name'] ;?>
<!-- <span class='pp'  style="margin-left: 10px;"><img alt="Profile Picture" src="<?php  //echo $_SESSION['profile_image_url'] ;?>" /></span> -->
</a></li>
</ul>
</div>

<!-- 
<div class='row search'>
<form accept-charset="UTF-8" action="/search" data-remote="true" id="search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
<input class="form-control input-sm" id="search_keyword" name="search_keyword" placeholder="search" type="search" />
<i class='fa fa-search icon-search' id='icon-search' onclick='search()'></i>
</form>
</div> -->




 
<div class='row menus'>
<ul class='nav'>
 
 <li id="dashboard-link" >
<a href="dashboard.php">Dashboard
<i class="fa fa-dashboard icon"></i>
</a></li>
 
 
 
 
<li id='assets-link'   <?php echo ( !in_array(1, $user_roles_parts) ? 'style="display:none;"' : '')?> >
<a href="assets_monitor.php">Assets
<i class='fa fa-file-text-o icon'></i>
</a></li>


<!-- <li id='notification-link'  <?php   //echo ( !in_array(2, $user_roles_parts) ? 'style="display:none;"' : '')?>  >
<a href="notification_monitor.php">Notifications
<i class='fa fa-exclamation-triangle icon'></i>
</a></li> -->


<li id='tickets-link'  <?php echo ( !in_array(2, $user_roles_parts) ? 'style="display:none;"' : '')?>  >
<a href="tickets.php">Open Tickets
<i class='fa fa-ticket icon'></i>
</a></li>

<li id='employees-link'  <?php echo ( !in_array(3, $user_roles_parts) ? 'style="display:none;"' : '')?>>
<a href="employees.php">Employees
<i class='fa fa-users icon'></i>
</a></li>
<li id='configure-link'    <?php echo ( !in_array(4, $user_roles_parts) ? 'style="display:none;"' : '')?>  >
<a href="config.php">Configure
<i class='fa fa-wrench icon'></i>
</a></li>
 <li id='roles-link'   <?php echo ( !in_array(5, $user_roles_parts) ? 'style="display:none;"' : '')?> >
<a href="role_table.php">Role Table
<i class='fa fa-cogs icon'></i>
</a></li>
<li class='divider'></li>
<li>
<a href="mailto:talha@object90.com,akjailani@nhc-ksa.com,rameshkumar@gmail.com?Subject=Assets NewHorizons%20Support" target="_top">support
<i class='fa fa-umbrella icon'></i>
</a></li>
<li>
<a data-method="delete" href="index.php?reset=1" rel="nofollow">log out
<i class='fa fa-power-off icon'></i>
</a></li>
</ul>
</div>
</div>

<script type="text/javascript">
jQuery( document ).ready(function() {

	

	str = "<?php echo $_SERVER[REQUEST_URI] ; ?>";
	if(str.search("dashboard.php") != '-1' )
 		jQuery("#dashboard-link").addClass( "active" );
	
  	if(str.search("assets_monitor.php") != '-1' || str.search("assets_new.php") != '-1')
 		jQuery("#assets-link").addClass( "active" );
	if(str.search("employees.php") != '-1'   || str.search("import_excel.php") != '-1'   || str.search("employee_new.php") != '-1')
		jQuery("#employees-link").addClass( "active" );
	if(str.search("tickets.php") != '-1'  || str.search("ticket_view.php") != '-1')
		jQuery("#tickets-link").addClass( "active" );
	if(str.search("notification_monitor.php") != '-1'   || str.search("notify_new.php") != '-1')
		jQuery("#notification-link").addClass( "active" );
	if(str.search("role_table.php") != '-1')
		jQuery("#roles-link").addClass( "active" );
	
	if(str.search("config.php")  != '-1'  || str.search("vendor_new.php")  != '-1'  || str.search("asset_category_new.php")    != '-1' || str.search("department_new.php") != '-1'  || str.search("project_new.php") != '-1'  || str.search("locations_new.php") != '-1')  
		jQuery("#configure-link").addClass( "active" );
	
		
	 
    
});

</script>
<?php }?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<?php 

session_start();
if(!$_SESSION['user_logged_in']){


?>
<script type="text/javascript">
window.location.href = "index.php"
		</script>
<?php 
$_SESSION['bad_attempt'] = true;


}
//echo 
//include_once(DIR_ABS.'inc/application_top.php'); ?>

<head>

<title>
</title>

<link data-turbolinks-track="true" href="css/application-f4d0efa73761521b652b54dd7321c38d.css" media="all" rel="stylesheet" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700" media="screen" rel="stylesheet" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" media="screen" rel="stylesheet" />
<link href="css/style.css" media="screen" rel="stylesheet" />

<script data-turbolinks-track="true" src="js/application-9924af930ec816234c493e9467f16835.js"></script>
<!-- <script src="https://js.stripe.com/v1/"></script> -->
<script src="js/v1.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrapValidator.min.js"></script>


<meta content="authenticity_token" name="csrf-param" />
<meta content="IfzLnEn8oYqOhaLKf6/huXuPr/feRlhEoW1az2XOYOs=" name="csrf-token" />
<meta content="pk_live_tXltt2t4mCC4vqhPbAGDkQLb" name="stripe-key" />
<body>
	<div class='container'>
<div class='row'>



<div class='col-md-3 col-lg-2' id='sidebar'>
<div class='row'>
<h1 class='header'>
<span class='pp'></span>
 
New Horizons Company

<?php  
 
?>
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
<div class='row search'>
<form accept-charset="UTF-8" action="/search" data-remote="true" id="search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
<input class="form-control input-sm" id="search_keyword" name="search_keyword" placeholder="search" type="search" />
<i class='fa fa-search icon-search' id='icon-search' onclick='search()'></i>
</form>
</div>






<div class='row menus'>
<ul class='nav'>
 
 <li id="dashboard-link" >
<a href="dashboard.php">Dashboard
<i class="fa fa-dashboard icon"></i>
</a></li>
 
 
 
 
<li id='assets-link'  >
<a href="assets_monitor.php">Assets
<i class='fa fa-file-text-o icon'></i>
</a></li>
<li id='alerts-link'>
<a href="alerts.php">Alerts
<i class='fa fa-exclamation-triangle icon'></i>
</a></li>
<li id='employees-link'>
<a href="employees.php">Employees
<i class='fa fa-users icon'></i>
</a></li>
<li id='configure-link'    >
<a href="config.php">Configure
<i class='fa fa-wrench icon'></i>
</a></li>
<li class='divider'></li>
<li id='sites-link'>
<a href="role_table.php">Role Table
<i class='fa fa-cogs icon'></i>
</a></li>
<li class='divider'></li>
<li>
<a href="https://pomsapp.com/support?email=talha%40object90.com&amp;name=Mohammed+Talha&amp;sd=object90">support
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
	if(str.search("employees.php") != '-1')
		jQuery("#employees-link").addClass( "active" );
	if(str.search("alerts.php") != '-1')
		jQuery("#alerts-link").addClass( "active" );
	
	if(str.search("config.php")  != '-1'  || str.search("vendor_new.php")  != '-1'  || str.search("asset_category_new.php")    != '-1' || str.search("department_new.php") != '-1')
		jQuery("#configure-link").addClass( "active" );
	
		
	 
    
});

</script>





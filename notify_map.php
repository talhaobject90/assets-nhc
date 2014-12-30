<?php
include_once('header-pop.php');

include_once('db_connect.php');

 


if($_SESSION['authorization_status'])


{
	
	
	
	
	
	
	
	
	}
	else{
	
	echo '<div class="row  ">
			<div class=" col-md-12 col-md-offset-2  vcenter">
			<h1> YOU ARE NOT AUTHORIZED TO ACCESS THIS PAGE</h1>
			<a href="dashboard.php"> Back to dashboard </a>
			</div>
			</div>';
	}
	
	include_once('footer-pop.php'); ?>
}
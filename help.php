<?php 

	include_once('header-login.php');
	include_once('db_connect.php');
	
	
	
?>


	
<!DOCTYPE html>
<html>
<head>
   <title>Help</title>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

 <link href="css/accord_style.css" media="screen" rel="stylesheet" />
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  
   <script>
  $(function() {
	  $(".section").hide();
	  
	  
	  $(".dash_menu").show();
	  //Section show concept
	  $(".thumbnail,.login").click(function(){
			
			$("#purchase").hide();
			$(".section").hide();
			
			var id=$(this).parent().attr("id");
			
			$("."+id).show();
			$("#"+id+"_menu").show();
			return false;
		  });
	  
	  //Back button
	$(".back_button").click(function(){
		
		$("#purchase").show();
		$(".section").hide();
		
		$(".dash_menu").show();
		
		return false;
	}); 

	//Menu functionality
	

	//Accordian Concept
	
    $( ".accordion" ).accordion({
      collapsible: true
    });
  });
  </script>
  <style>
  .thumbnail
  {
  width: 250px;
height: 160px;

  }
  .dash_thumb
  {
  margin-top: 30px;
  }
  .help_menu ul
  {
  list-style:none;
  }
  .help_menu ul li a
  {
  padding: 9px 30px 9px 8px;
  display: block;
  margin:0px 0px 3px;
  text-decoration:none  !important;
  }
  .help_menu ul li a:hover
  {
  background: none repeat scroll 0 0 rgba(52, 127, 223, 0.8);
    color: #fff !important;
    transition: all 0.2s ease-in-out 0s;
    text-decoration:none !important;
  }
  
  
  </style>
</head>
<body>
						<!--Main Menu start-->
<div class="help_menu dash_menu" style="width:300px;float:left">
<div class='row'>
<h1 class='header'>
<span class='pp'></span>
 
<a href="dashboard.php">
<img  class="form-control" src="images/logoold.jpg" style="width: 225px;height: auto;margin-left: 65px;"></a>
 
</h1>
</div>
<ul>
				<li><h3 style="text-align:left">NHC Help</h3></li>
<li id=""><a href="" class="login ">Dashboard</a><span class="arrow"></span></li>
<li id="login"><a href="" class="login">Logging In</a><span class="arrow"></span></li>
<li id="signup"><a href="" class="login">Signingup Your Account</a><span class="arrow"></span></li>
<li id="password"><a href="" class="login">Managing Your Password</a><span class="arrow"></span></li>
<li id="support"><a href="" class="login">Support</a><span class="arrow"></span></li>
		</ul>

</div>
					<!--Main Menu End-->
			
					
								

<div class="col-md-9 col-lg-10" id="content" style="width:900px;">
	<div class="row">
		<div class="canvas col-md-12" id="main-canvas"  style="padding-top: 50px;">
		<input type="button" name="main_dashboard" value="Home"  class="btn btn-primary pull-right" onclick='window.location="dashboard.php";'>
		<section class="form col-sm-9  col-centered" id="purchase" >
		
					<div class="row">
					
						<div class="page-header">
  										

<br/>

</div>
					</div>
					
					
		 
    
<div class="row row-centered ">

 
  <div class="col-xs-6 col-centered" id="assets">
    <a href="" class="thumbnail">
    <i class="fa fa-file-text-o icon dash_thumb "></i> 
    <p>Assets</p>
	
     </a>
  </div>
 
    <div class="col-xs-6 col-centered" id="employee">
    <a href="" class="thumbnail">
    <i class="fa fa-users icon dash_thumb "></i> 
	
    <p>Employees</p>
	
     </a>
  </div>
</div>

<br>
<br>

<div class="row">
<!-- 
  <div class="col-xs-6 col-md-4  col-centered"  <?php // echo ( !in_array(2, $user_roles_parts) ? 'style="display:none;"' : '')?> >
    <a href="notification_monitor.php" class="thumbnail">
        <i class="fa fa-exclamation-triangle   dash_thumb "></i> 
        <p>Notifications</p>
    </a>
  </div>
 -->  
    <div class="col-xs-6 col-centered" id="tickets">
    <a href="" class="thumbnail">
    <?php 
    $result = mysql_query("SELECT * FROM ".$tickets_table);
$num_rows = mysql_num_rows($result);
?>
        <i class="fa fa-ticket dash_thumb"></i>
        <p>Open Tickets</p> 
		
    </a>
  </div>

</div>
<br><br><br>
<div class="row">
  <div class="col-xs-6 col-centered " id="reports">
    <a href="" class="thumbnail">
        <i class="fa fa-sort-alpha-desc  dash_thumb"></i> 
        <p>Reports</p>
		
    </a>
  </div>
    <div class="col-xs-6 col-centered" id="configure">
    <a href="" class="thumbnail">
        <i class="fa fa-wrench   dash_thumb  "></i>
        <p>Configure</p> 
		
    </a>
  </div>
</div>
<br>

	</section>
	
	<!--Login Section start-->
	<section id="tickets-section" class="section login">
	<button type="button"  class="btn btn-primary back_button" >Back</button>
	<h2>Logging In</h2>
	
<br/>
	
	<div class="clear"></div>
	
	<div class="accordion">
  <h3>Normal Login</h3>
  <div>
     <ul>
      <li>Already Regitered user can enter the Email Id to Email text field</li>
      <li>Then enter the password to password field</li>
      <li>Select the Login button to logon your NHC Account</li>
    </ul>
  </div>
  <h3>Login with Google</h3>
  <div>
    <ul>
      <li>Select the button to Sign in with Google</li>
      <li>Then Login your Gmail Account,System shall redirect to NHC system</li>
    </ul>
  </div>
 

</div>
	
	</section>
	<!--Login Section start-->
	
	
	
	<!--Signup Section End-->
	
	<section id="tickets-section" class="section signup">
	<button type="button"  class="btn btn-primary back_button" >Back</button>
	<h2>Signing up</h2>

<br/>
	
	<div class="clear"></div>
	
	
  <h3></h3>
  <div>
     <ul>
      <li>Select the button to Sign in with Google</li>
      <li>Then Login your Gmail Account,System shall redirect to NHC system</li>
      <li>Temporarly Data Entry Operator Role have assigned so user can only access the particular pages only</li>
    </ul>
  </div>


	
	</section>
	<!--signup Section End-->
	
	<!--Password Section End-->
	
	
	<section id="tickets-section" class="section password">
	<button type="button"  class="btn btn-primary back_button" >Back</button>
	<h2>Password</h2>
	
<br/>
	
	<div class="clear"></div>
	
	<div class="accordion">
  <h3>Forget Password</h3>
  <div>
     <ul>
      <li>Select the link Forget Password from the Login Box</li>
      <li>Enter the Email ID to Email text field</li>
      <li>Select the Send button system shall send a password to our Email account</li>
    </ul>
  </div>
  <h3>Change Password</h3>
  <div>
    <ul>
      <li>Select the Change Password button from Dashboard</li>
      <li>One popup window has appear, Enter Password then select the update button to save password to our account </li>
    </ul>
  </div>
 

</div>
	
	</section>
	<!--Password Section End-->
	
	<!--Support Section End-->
	
	
	<section id="tickets-section" class="section support">
	<button type="button"  class="btn btn-primary back_button" >Back</button>
	<h2>Support</h2>

<br/>
	
	<div class="clear"></div>
	
	
  <h3>Support Team</h3>
  <div>
     <ul>
      <li>Select the link Support from Side Menu</li>
      <li>Select the redirected to Outlook Express</li>
      <li>Enter message then select send button to send a mail to Support Team</li>
    </ul>
  </div>
  
 


	
	</section>
	<!--Support Section End-->
	
	
	<section id="dashboard-section" class="section assets">
	<button type="button" class="btn btn-primary back_button" >Back</button>
	<h2>Assets Help</h2><br/>
	

	

	<div class="clear"></div>
	
	<div class="accordion">

	
  <h3>Add New Assets</h3>
  <div>
    <ul>
       <li>Select the link Assets from the Dashboard</li>
       <li>Select the link Create new Asset from the Asset Window</li>
       <li>Enter the asset name to text field is an mandatory</li>
       <li>Enter the asset Description to text field</li>
       <li>Select the asset status Ex:Active or Inactive</li>
       <li>Select Location of asset</li>
       <li>Select Custodian of asset</li>
      <li> Select Manufacturer of asset</li>
       <li>Select Plate Number of asset</li>
       <li>Select Project Category of asset</li>
      <li> Select Category of asset</li>
       <li>Enter Purchase price of asset</li>
       <li>Enter Current Value of asset</li>
      <li> Select Department of asset</li>
      <li> Enter Total maintainance and Total Depreciation of asset</li>
      <li> Enter Accident History and Violation History of asset</li>
      <li> Enter Different type of insurence Expiry Date on Asset</li>
       <li>Select the save button to save Asset Details to NHC System</li>
       </ul>
  </div>
  <h3>Edit Existing Assets.</h3>
  <div>
      <ul>
      <li>Select the link Assets from the Dashboard</li>
      <li>Select the Pencil image to Edit an Particular Asset</li>
      <li>Change the asset details to Edit Asset screen </li>
      <li>Select the Update Asset button to save Asset Details to NHC System</li>
    </ul>
  </div>
  <h3>Delete Assets</h3>
  <div>
     
    <ul>
      <li>Select the link Assets from the Dashboard</li>
      <li>Select the Dustbin image to Delete an Particular Asset</li>
      <li>Selected Asset is remove from NHC System</li>
    </ul>
  </div>
 <h3>Change Custodian</h3>
  <div>
    <ul>
      <li>Select the link Assets from the Dashboard</li>
      <li>Select the Pencil image to edit an Particular Asset</li>
      <li>Selecte the custodian from the Edit asset sreen then select the Update Asset button to save details to NHC system</li>
      <li>System send a mail to Site manager and Requested User</li>
      <li>System site manager approved the changes then Asset custodian has changed</li>
    </ul>
  </div>	
</div>
		

	</section>
	

	
	<section id="employee-section" class="section employee">
	<button type="button"  class="btn btn-primary back_button" >Back</button>
	<h2>Employee</h2>
	
<br/>
	
	<div class="clear"></div>
	
	<div class="accordion">
 
  <h3>Create New Employee</h3>
  <div>
    <p><ul>
	<li>Select the Employee link from the Dashboard</li>
      <li>Select the link Create new Employee from the Employee Window</li>
     <li>Enter the employee name to input field is an mandatory</li>
     <li>Enter the email address </li>
     <li>Enter the Department of Employee</li>
	 <li>Select the Asset status Ex:Active or Inactive</li>
     <li>Enter the Phone number</li>
      <li>Select the Save Employee button to save Employee Details to NHC System</li>
    </p>
  </div>
  <h3>Update Existing Employee</h3>
  <div>
  <ul>
      <li>Select the Employee link  from the Dashboard</li>
      <li>Select the Pencil image to Edit an Particular Employee</li>
      <li>Change the Employee details to Edit Employee screen </li>
      <li>Select the Update Employee button to save Employee Details to NHC System</li>
    </ul>
  </div>
  <h3>Delete Employee</h3>
  <div>
     <ul>
      <li>Select the Employee link from the Dashboard</li>
      <li>Select the Dustbin image to Delete an Particular Employee</li>
      <li>Selected Employee is remove from NHC System</li>
    </ul>
	</div>
 <h3>Import Employees</h3>
  <div>
    <ul>
      <li>Select the Employee link from the Dashboard</li>
      <li>Select the import Employee link to import Employees</li>
      <li>Import employees by uploading the excel file generated from Reports Generator.This is mandatory</li>
</ul>
</div>
</div>

	</section>
	

	<!--tickets Section start-->
	<section id="tickets-section" class="section tickets">
		<button type="button"  class="btn btn-primary back_button" >Back</button>
	<h2>Tickets</h2>

<br/>
	
	<div class="clear"></div>
	
	<div class="accordion">
  <h3>View Tickets</h3>
  <div>
     <ul>
      <li>Select the link Open Tickets from the Dashboard</li>
      <li>Select the Folder image to view an Particular Tickets</li>
      <li>System shall display the Ticket Details</li>
    </ul>
  </div>
  <h3>Print Tickets</h3>
  <div>
    <ul>
      <li>Select the button to print ticket, System shall generate a form</li>
      <li>Fill the Ticket details then select a Print button system shall print a form to PDF Format </li>
    </ul>
  </div>
 

</div>
	
	</section>
	

	
	<section id="reports-section" class="section reports">
		<button type="button" class="btn btn-primary back_button" >Back</button>
		<h2>Reports</h2>

<br/>
	
	<div class="clear"></div>
	
		<div class="accordion">
  <h3>Asset Reports</h3>
  <div>
	 <ul>
      <li>Select the link Reports from the Dashboard</li>
      <li>System shall display the Report screen with three tabs(Asset Report Tab is default) </li>
      <li>Enter the Report title to text field </li>
      <li>Select sorting method of Asset Report </li>
      <li>Select Filter type by Status or Category or Manufacturer or Project or Department</li>
      <li>Select Data columns for which columns are placed on your Report</li>
      <li>Select Generate button to download report to your system</li>
    </ul>
  </div>
  <h3>Other Reports</h3>
  <div>
    <ul>
      <li>Select the link Reports from the Dashboard</li>
      <li>System shall display the Report screen with three tabs(Asset Report Tab is default) </li>
      <li>Select the tab Other Reports </li>
      <li>Enter the Report title to text field </li>
      <li>Enter Report Protection password(Optional)</li>
      <li>Select report type from the list</li>
      <li>Select Generate button to download report to your system</li>
    </ul>
  </div>
  <h3>Special Reports</h3>
  <div>
   
    <ul>
      <li>Select the link Reports from the Dashboard</li>
      <li>System shall display the Report screen with three tabs(Asset Report Tab is default) </li>
      <li>Select the tab Other Reports </li>
      <li>Enter the Report title to text field </li>
      <li>Enter Report Protection password(Optional)</li>
      <li>Select Filter type from the list</li>
      <li>Select Generate button to download report to your system</li>
    </ul>
  </div>

</div>

	</section>
	
	
	<section id="configure-section" class="section configure">
		<button type="button" class="btn btn-primary back_button" >Back</button>
		<h2>Configure</h2>

<br/>
	
	<div class="clear"></div>
	
			<div class="accordion">
  <h3>Configure Manufacturers</h3>
  <div>
  	  Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)
      
     <ul>
      <li>Create new Manufacturer</li>
      <ul>
      	<li>Select the link Create New Manufacturer</li>
      	<li>Enter the Manufacturer name to text field</li>
      	<li>Select Save Manufacturer button to save detail to NHC system</li>
      </ul>
      <li>Update Existing Manufacturer</li>
      <ul>
      	<li>Select Pencil image to Edit the manufacturer details</li>
      	<li>Enter the New Manufacturer name to text field</li>
      	<li>Select Update Manufacturer button to save detail to NHC system</li>
      </ul>
      <li>Delete Manufacturer</li>
      <ul>
      	<li>Select Dustbin image to Delete the manufacturer details</li>
      </ul>
    </ul>
  </div>
  <h3>Configure Asset Categories</h3>
  <div>
     Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the  Categories tab, system shall list the Category
      
     <ul>
      <li>Create new Categories</li>
      <ul>
      	<li>Select the link Create New Categories</li>
      	<li>Enter the Categories name to text field</li>
      	<li>Select Save Categories button to save detail to NHC system</li>
      </ul>
      <li>Update Existing Categories</li>
      <ul>
      	<li>Select Pencil image to Edit the Categories details</li>
      	<li>Enter the New Categories name to text field</li>
      	<li>Select Update Categories button to save detail to NHC system</li>
      </ul>
      <li>Delete Categories</li>
      <ul>
      	<li>Select Dustbin image to Delete the Categories details</li>
      </ul>
    </ul>
  </div>
  <h3>Configure Location</h3>
  <div>
     Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the  Location tab, system shall list the Location
      
     <ul>
      <li>Create new Location</li>
      <ul>
      	<li>Select the link Create New Location</li>
      	<li>Enter the Location name to text field</li>
      	<li>Select Save Location button to save detail to NHC system</li>
      </ul>
      <li>Update Existing Location</li>
      <ul>
      	<li>Select Pencil image to Edit the Categories details</li>
      	<li>Enter the New Location name to text Location</li>
      	<li>Select Update Location button to save detail to NHC system</li>
      </ul>
      <li>Delete Location</li>
      <ul>
      	<li>Select Dustbin image to Delete the Location details</li>
      </ul>
    </ul>
  </div>
	  <h3>Configure Departments</h3>
  <div>
      Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the  Departments tab, system shall list the Departments
      
     <ul>
      <li>Create new Location</li>
      <ul>
      	<li>Select the link Create New Departments</li>
      	<li>Enter the Department name to text field</li>
      	<li>Select Save Department button to save detail to NHC system</li>
      </ul>
      <li>Update Existing Location</li>
      <ul>
      	<li>Select Pencil image to Edit the Departments details</li>
      	<li>Enter the New Department name to text Location</li>
      	<li>Select Update Department button to save detail to NHC system</li>
      </ul>
      <li>Delete Location</li>
      <ul>
      	<li>Select Dustbin image to Delete the Department details</li>
      </ul>
    </ul>
  </div>
  	  <h3>Configure Projects</h3>
  <div>
      Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the Project tab, system shall list the Projects
      
     <ul>
      <li>Create new Project</li>
      <ul>
      	<li>Select the link Create New Project</li>
      	<li>Enter the Project name to text field</li>
      	<li>Select Save Project button to save detail to NHC system</li>
      </ul>
      <li>Update Existing Project</li>
      <ul>
      	<li>Select Pencil image to Edit the Project details</li>
      	<li>Enter the New Project name to text Location</li>
      	<li>Select Update Project button to save detail to NHC system</li>
      </ul>
      <li>Delete Location</li>
      <ul>
      	<li>Select Dustbin image to Delete the Project details</li>
      </ul>
    </ul>
  </div>
    	  <h3>Notification</h3>
  <div>
      Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the Asset Notification tab, system shall list the Notification
      
     <ul>
    	<li>Select the first notification Role list member,system shall send a alert to selected Role Members only</li>
    	<li>Select the second notification Role list member,system shall send a alert to selected Role Members only</li>
    	<li>Select the Third notification Role list member,system shall send a alert to selected Role Members only</li>
    	<li>Select the days to alert Expiry date of Insurance </li>
    	<li>Select the Update button to save the details to NHC system</li>
    </ul>
  </div>
    <h3>Admin Tools</h3>
  <div>
      Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the  Approver Details tab, system shall display tool screen
      
     <ul>
      <li>Select the Truncate button system shall delete all records to Tickets</li>
    </ul>
  </div>
   <h3>Approver Details</h3>
  <div>
      Select the link Configure from the Dashboard<br/>
      System shall display the Configure screen with Eight tabs(Manufacturer Tab is default)<br/>
      Select the  Approver Details tab, system shall Custodian Notification screen
      
     <ul>
      <li>Select Pencil image to view the Custodian notification details</li>
      <li>Change the status of custodian notification system shall sent a status alert to Site manager and Requested Custodian</li>
      <li>select update notification button system shall save the details</li>
      <li>Select Dustbin image to delete the notification from notification list</li>
    </ul>
  </div>
</div>
	
	</section>
	
	<div style="height:100px;">
	</div>
	
	</div>
	
		</div>
		</div>


</body>
</html>





<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	
	
	session_start();
	
	
	if(isset($_POST['set_username_password'])){
	
		if($_POST['set_username_password'] == 'save'){
			if(isset($_POST['username']) && $_POST['password']){
					
				$mysql_query = "UPDATE `".$users_table."` SET
			       `username` ='".trim($_POST["username"])."',
			       	`password` ='".trim($_POST["password"])."'
			    
			          WHERE `google_id`= ".$_SESSION['user_id'].";";
				mysql_query($mysql_query);
			}
		}
	}
	
	  $user_query ="SELECT * FROM `".$users_table."`  WHERE `google_id` =".$_SESSION['user_id'].";";
	  $user_query_result = mysql_query($user_query);
	  
	  $username_not_set = true;
	  
	  if($user_query_result){
	  while($rows = mysql_fetch_array($user_query_result)) {
	      	  $username = $rows['username'];
	  }
	  if(trim($username)  != '')
	  $username_not_set = false;
	  
	  }
	  
	  
	  
	  
	
	

	
	
	?>
<!DOCTYPE html>
<head>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<meta charset=utf-8 />
<title>JS Bin</title>
</head>
<body>
 
  
  <div id="dialog">
   Asset details
  </div>
	<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
		<div class="canvas col-md-12" id="main-canvas"  style="padding-top: 50px;">
		
	<div>						<!-- Button trigger modal -->
<button type="button" class="btn btn-primary   pull-right" data-toggle="modal" data-target="#myModal">
  <?php  echo ($username_not_set?'Set Password':'Change Password') ;?>

</button>
<button type="button" class="btn btn-primary   pull-right" onclick="window.location='help.php';">
 Help
</button>
 </div>
<br>
<br>
<br>
			 
				<section class="form col-sm-9  col-centered" id="purchase"  >
					<div class="row">
						<div class="page-header">
  

</div>
					</div>
					
					
		 
    


				
					
					
<div class="row  row-centered"  >
 
  <div class="col-xs-6 col-md-4 col-centered"  <?php echo ( !in_array(1, $user_roles_parts) ? 'style="display:none;"' : '')?>>
    <a href="assets_monitor.php" class="thumbnail">
    <i class="fa fa-file-text-o icon dash_thumb "></i> 
    <p>Assets</p>
	
     </a>
  </div>
 
    <div class="col-xs-6 col-md-4 col-centered"  <?php echo ( !in_array(3, $user_roles_parts) ? 'style="display:none;"' : '')?>>
    <a href="employees.php" class="thumbnail">
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
    <div class="col-xs-6 col-md-4   col-centered"   >
    <a href="tickets.php" class="thumbnail">
    <?php 
    $result = mysql_query("SELECT * FROM ".$tickets_table);
$num_rows = mysql_num_rows($result);
?>
        <i class="fa fa-ticket   dash_thumb  "><span class="badge" ><?php  echo $num_rows?></span></i>
        <p>Open Tickets</p> 
		
    </a>
  </div>

</div>
<br><br><br>
<div class="row">
  <div class="col-xs-6 col-md-4  col-centered"   >
    <a href="report.php" class="thumbnail">
        <i class="fa fa-sort-alpha-desc  dash_thumb"></i> 
        <p>Reports</p>
		
    </a>
  </div>
    <div class="col-xs-6 col-md-4   col-centered"   <?php echo ( !in_array(4, $user_roles_parts) ? 'style="display:none;"' : '')?>>
    <a href="config.php" class="thumbnail">
        <i class="fa fa-wrench   dash_thumb  "></i>
        <p>Configure</p> 
		
    </a>
  </div>
</div>
<br>



 
 



 
 
						</section>
						

						 
					</div>
				
		<div class="clear">
		</div>
		
		
		
		
		

<!-- Modal-->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php  echo ($username_not_set?'Set password for ordinary login':'Change password for ordinary login') ;?></h4>
      </div>
      <div class="modal-body">
       <form id="identicalForm" class="form-horizontal"  action="" method="post">
       
     <div class="form-group" >
        <label class="col-sm-10 control-label"><?php  echo ($username_not_set?'Set':'Change') ;?> password for user name : <?php echo $_SESSION['user_email']; ?></label>
        <div class="col-sm-5">
            <input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['user_email']; ?>" />
        </div>
    </div>    
       
       
    <div class="form-group">
        <label class="col-sm-3 control-label">Password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Retype password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="confirmPassword" />
        </div>
    </div>
    
    <div class="form-group " style="text-align: center">
    	<button type="submit" name="set_username_password" class="btn btn-primary centered"    value="save"><?php  echo ($username_not_set? 'Save':'Update') ;?></button>
    </div>
</form>
      </div>
     
     
    </div>
  </div>
</div>
 






</div>
</div>

</body>
</html>



<?php   include_once('footer-pop.php'); ?>
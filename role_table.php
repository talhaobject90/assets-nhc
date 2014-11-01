<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	
	
	
	 if(isset($_POST['update_role'])){
	 	
	 	$screen_array = serialize($_POST['screens']);

	 	 $mysql_query = "UPDATE `".$user_roles_table."` SET
			       `user_role_screens`='".$screen_array."'
			          WHERE `user_role_id`= ".$_POST["update_role"].";";
	 	mysql_query($mysql_query);
	 	
	 	
	 	
	 	
	 }
	
	
	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		if(isset($_GET['del_vendor'])){
			$mysql_query = "DELETE FROM `".$vendor_table."` WHERE `id` =".$delete_id.";";
			mysql_query($mysql_query);
			?>
			<script type="text/javascript">
			jQuery(function () {
 				jQuery('a[href="#vendor"]').tab('show'); // Select tab by name
			})
			</script><?php 
		}
		if(isset($_GET['del_category'])){
			$mysql_query = "DELETE FROM `".$assets_category_table."` WHERE `id` =".$delete_id.";";
			mysql_query($mysql_query);
			?>
			<script type="text/javascript">
			jQuery(function () {
 				jQuery('a[href="#asset_category"]').tab('show'); // Select tab by name
			})
			</script><?php 
		}
		if(isset($_GET['del_department'])){
			$mysql_query = "DELETE FROM `".$department_table."` WHERE `id` =".$delete_id.";";
			mysql_query($mysql_query);
			?>
			<script type="text/javascript">
 			jQuery(function () {
				jQuery('a[href="#department"]').tab('show'); // Select tab by name
 			})
			</script><?php 
		}
		
		
	
	}
	?>
	
	
 		  
 		  <?php 
	
	
	
	
	
	
	?>
	
	<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
	<div class="canvas col-md-12" id="main-canvas">
	<form accept-charset="UTF-8" action="" class="form-horizontal"
			id="purchase-main-form" method="post">
			<div style="margin: 0; padding: 0; display: inline">
			<input name="utf8" type="hidden" value="✓"><input
			name="authenticity_token" type="hidden"
					value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg=">
					</div>
					<input id="current_time" name="current_time" type="hidden"
							value="1413815433">
		
				<div class="row">		
						<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#users" role="tab" data-toggle="tab">Users</a></li>
  <li><a href="#user_roles" role="tab" data-toggle="tab">User Roles</a></li>
  <li><a href="#role_screens" role="tab" data-toggle="tab">Role Screens</a></li>
</ul>

<!-- Tab panes -->
<!-- ---- VENDOR TAB CONTENT -->
<div class="tab-content">
  <div class="tab-pane   active" id="users">
   
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Users</h1>
<div class="page-menus">
<!-- <a href="vendor_new.php"><i class="icon fa fa-plus"></i><span>Create new user</span></a> -->
 
</div>
</div>

<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>
</div>
<div class="row">
<div class="page-content col-md-12">
 
<?php 
  $all_assets_cat_query = "SELECT * FROM `".$users_table."`;";
$all_assets = mysql_query($all_assets_cat_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Name</th><th>Email</th><th>Role</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {

  $user_role_query= "SELECT `user_role_name` FROM `".$user_roles_table."` WHERE `user_role_id` ='".$row['users_user_role_id']."';";
$user_role_query_result = mysql_query($user_role_query);
while($role_rows = mysql_fetch_array($user_role_query_result)) {
$user_role= $role_rows['user_role_name']; 
}


 
echo '<tr ><td>'.$row['id'].'</td><td>'.$row['google_name'].'</td><td>'.$row['google_email'].'</td><td>'.$user_role.'</td><td> <a href="edit_role_table.php?edit='.$row['id'].'" ><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="config.php?delete='.$row['id'].'&del_vendor=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

 

}
echo '</table>';
?>

</div>
</div>
</section>
 
  </div>
  
  <!--  ASSET PANE CONTENT -->
  
  <div class="tab-pane  "  id="user_roles">
  
  
  <section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>User Roles</h1>
<div class="page-menus">
<a href="asset_category_new.php"><i class="icon fa fa-plus"></i><span>Create new user role</span></a></div>
</div>

<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>
</div>
<div class="row">
<div class="page-content col-md-12">
<?php 
  $all_assets_query = "SELECT * FROM `".$user_roles_table."`;";
$all_assets = mysql_query($all_assets_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Role Name</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {


/* echo '<tr ><td>'.$row['user_role_id'].'</td><td>'.$row['user_role_name'].'</td>
<td>
					<a href="department_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="config.php?delete='.$row['id'].'&del_department=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';
 */




echo '<tr ><td>'.$row['user_role_id'].'</td><td>'.$row['user_role_name'].'</td>
<td>
					
					 

 						<img src="images/edit.png" data-toggle="modal" data-target="#role_screens_modal_'.$row['user_role_id'].'" style="cursor:pointer;">
					</td> <td><a href="config.php?delete='.$row['id'].'&del_department=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

}
echo '</table>';
?>

</div>
</div>
</section>
  
  
  </div>
  <div class="tab-pane   " id="role_screens">
  
  
  <section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Departments</h1>
<div class="page-menus">
<a href="department_new.php"><i class="icon fa fa-plus"></i><span>Create new department</span></a></div>
</div>

<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>
</div>
<div class="row">
<div class="page-content col-md-12">
 
<?php 
  $all_assets_query = "SELECT * FROM `".$user_roles_table."`;";
$all_assets = mysql_query($all_assets_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Name</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
echo '<tr ><td>'.$row['user_role_id'].'</td><td>'.$row['user_role_name'].'</td><td><a href="department_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="config.php?delete='.$row['id'].'&del_department=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

}
echo '</table>';
?>

</div>
</div>
</section>
  
  
  
  </div>
</div>

</div>
</form>
</div>
</div>
</div>


<!-- Modal -->
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





      <link rel="stylesheet" href="css/bootstrap-multiselect.css" />
<script src="js/bootstrap-multiselect.js"></script>


  <?php 
  $role_table_query = "SELECT * FROM `".$user_roles_table."`;";
$role_table_result = mysql_query($role_table_query);
while($role_table_row = mysql_fetch_array($role_table_result)) {


?>


<div class="modal fade"  id="role_screens_modal_<?php echo  $role_table_row['user_role_id']?>">
  <div class="modal-dialog">
    <div class="modal-content">


<form id="multiselectForm_<?php $role_table_row['user_role_id']?>"  action=""  method="post" class="form-horizontal" style="margin-top:30px;">
    <div class="form-group">
        <label class="col-sm-3 control-label">Role Name</label>
        <div class="col-sm-5">
            <input  class="form-control"  name="role_name" placeholder="Role Name">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Browser</label>
        <div class="col-sm-5">
            <select class="form-control" name="screens[]" multiple>
        <?php 
  $all_assets_query = "SELECT * FROM `".$screens_table."`;";
$all_assets = mysql_query($all_assets_query);
while($row = mysql_fetch_array($all_assets)) {
echo '<option value ="'.$row['id'].'" >'.$row['screen_name'].'</option>';
}
?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <button type="submit"    value ="<?php echo  $role_table_row['user_role_id']?>"  name="update_role"class="btn btn-default">Update</button>
        </div>
    </div>
</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
}?>


 

 
 



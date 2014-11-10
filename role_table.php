<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	  if($_SESSION['authorization_status'])
	{
		
 
		
	 	if(isset($_POST['new_user_role']))
 	{
 	if(isset($_POST['role_name']) && $_POST['role_name'] != ''){
 		
 		         $mysql_query = "INSERT INTO `".$user_roles_table."`
 		       		( `user_role_name`
				 ) VALUES
				('".trim($_POST["role_name"])."'
					)";
 		       
 		  mysql_query($mysql_query);
 		  ?>
			<script type="text/javascript">
			jQuery(function () {
 				jQuery('a[href="#user_roles"]').tab('show'); // Select tab by name
			})
			</script><?php 
 	}
 	}
 	
 	
 	

 	if(isset($_POST['add_screen']))
 	{
 		if(isset($_POST['new_screen_name']) && $_POST['new_screen_name'] != ''){
 				
 			$mysql_query = "INSERT INTO `".$screens_table."`
 		       		( `screen_name`
				 ) VALUES
				('".trim($_POST["new_screen_name"])."'
					)";
 	
 			mysql_query($mysql_query);
 			?>
 				<script type="text/javascript">
 				jQuery(function () {
 	 				jQuery('a[href="#role_screens"]').tab('show'); // Select tab by name
 				})
 				</script><?php 
 	 	}
 	 	}
 	 	
 	 	
 	 	
 	 	
 	 	if(isset($_POST['edit_screen_name_from'])){
 	 	
  	 		  $mysql_query = "UPDATE `".$screens_table."` SET
			       `screen_name`='".$_POST['edit_screen_name']."' , `id`='".$_POST['edit_screen_id']."' 
			          WHERE `id`= ".$_POST['edit_screen_name_from'].";";
 	 		mysql_query($mysql_query);
 	 		?>
 	 				<script type="text/javascript">
 	 				jQuery(function () {
 	 	 				jQuery('a[href="#role_screens"]').tab('show'); // Select tab by name
 	 				})
 	 				</script><?php 
 	 				
 	 		 }
 	 		 
 	 	
 	 	
 	
 	
 	
 	
 		 		 if(isset($_POST['update_users_user_role'])){
 	 	   $mysql_query = "UPDATE `".$users_table."` SET
			       `users_user_role_id`='".$_POST['users_user_role_id']."'   
			          WHERE `google_id`= ".$_POST["update_users_user_role"].";";
	 	mysql_query($mysql_query);
	 	 
	 	?>
	 				<script type="text/javascript">
	 				jQuery(function () {
	 	 				jQuery('a[href="#users"]').tab('show'); // Select tab by name
	 				})
	 				</script><?php 
	 				
	 				
	 	
	 }
 	
 	
 	
	
	
	 if(isset($_POST['update_role'])){
	 
	 	  $screen_array = serialize($_POST['screens']);
	 	   $mysql_query = "UPDATE `".$user_roles_table."` SET
			       `user_role_screens`='".$screen_array."' , `user_role_name` ='".$_POST['role_name']."'  
			          WHERE `user_role_id`= ".$_POST["update_role"].";";
	 	mysql_query($mysql_query);
	 	?>
			<script type="text/javascript">
			jQuery(function () {
 				jQuery('a[href="#user_roles"]').tab('show'); // Select tab by name
			})
			</script><?php 
			
	 }
	 
	 
	 
	 
	
	
	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		if(isset($_GET['users'])){
			$mysql_query = "DELETE FROM `".$users_table."` WHERE `google_id` =".$delete_id.";";
			mysql_query($mysql_query);
			?>
			<script type="text/javascript">
			jQuery(function () {
 				jQuery('a[href="#users"]').tab('show'); // Select tab by name
			})
			</script><?php 
		}
		if(isset($_GET['user_role'])){
			$mysql_query = "DELETE FROM `".$user_roles_table."` WHERE `user_role_id` =".$delete_id.";";
			mysql_query($mysql_query);
			?>
			<script type="text/javascript">
			jQuery(function () {
 				jQuery('a[href="#user_roles"]').tab('show'); // Select tab by name
			})
			</script><?php 
		}
		if(isset($_GET['role_screens'])){
			$mysql_query = "DELETE FROM `".$screens_table."` WHERE `id` =".$delete_id.";";
			mysql_query($mysql_query);
			?>
			<script type="text/javascript">
 			jQuery(function () {
				jQuery('a[href="#role_screens"]').tab('show'); // Select tab by name
 			})
			</script><?php 
		}
		
		
	
	}
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
<!-- ---- USERS TAB CONTENT -->
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
echo '<th>Name</th><th>Email</th><th>Role</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {

  $user_role_query= "SELECT `user_role_name` FROM `".$user_roles_table."` WHERE `user_role_id` ='".$row['users_user_role_id']."';";
$user_role_query_result = mysql_query($user_role_query);
$user_role = '';
while($role_rows = mysql_fetch_array($user_role_query_result)) {
$user_role= $role_rows['user_role_name']; 
}


 
echo '<tr ><td>'.$row['google_name'].'</td><td>'.$row['google_email'].'</td><td>'.$user_role.'</td><td>  <img src="images/edit.png"  data-toggle="modal" data-target="#users_modal_'.$row['google_id'].'"     style="cursor:pointer;"  class="img-responsive" alt="Edit">  </td> <td><a href="role_table.php?delete='.$row['google_id'].'&users=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

 

}
echo '</table>';
?>

</div>
</div>
</section>
 
  </div>
  
  <!--  USER ROLES PANE CONTENT -->
  
  <div class="tab-pane  "  id="user_roles">
  
  
  <section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>User Roles</h1>
<div class="page-menus">
 <span  style="cursor:pointer;color: #17ae47;"><i class="icon fa fa-plus "   data-toggle="modal" data-target="#myModal"  >&nbsp;&nbsp;Create new user role &nbsp;</i></span></div>


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

 




echo '<tr ><td>'.$row['user_role_id'].'</td><td>'.$row['user_role_name'].'</td>
<td>
					
					 

 						<img src="images/edit.png" data-toggle="modal" data-target="#role_screens_modal_'.$row['user_role_id'].'" style="cursor:pointer;">
					</td> <td><a href="role_table.php?delete='.$row['user_role_id'].'&user_role=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

}
echo '</table>';
?>

</div>
</div>
</section>
  
  
  </div>
  
  
  
    <!--  SCREENS PANE CONTENT -->
  
  
  
  <div class="tab-pane   " id="role_screens">
  
  
  <section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Screens</h1>
<div class="page-menus">
<span  style="cursor:pointer;color: #17ae47;"><i class="icon fa fa-plus"  data-toggle="modal" data-target="#add_user_screens_modal"   >    &nbsp;Create new screen  </i> </span></a></div>
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
  $user_screen_query = "SELECT * FROM `".$screens_table."`;";
$user_screen_query_result= mysql_query($user_screen_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Screen Name</th> <th></th> <th></th>';
while($row = mysql_fetch_array($user_screen_query_result)) {
echo '<tr ><td>'.$row['id'].'</td><td>'.$row['screen_name'].'</td>
							<td><img src="images/edit.png" data-toggle="modal" data-target="#screens_modal_'.$row['id'].'" style="cursor:pointer;"></td>
							<td><a href="role_table.php?delete='.$row['id'].'&role_screens=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

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
        <h4 class="modal-title" id="myModalLabel">New user role</h4>
      </div>
      <div class="modal-body">
       <form id="identicalForm" class="form-horizontal"  action="" method="post">
       
  
       
       
    <div class="form-group">
        <label class="col-sm-3 control-label">Role name:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="role_name" />
        </div>
    </div>

 
    
    <div class="form-group " style="text-align: center">
    	<button type="submit" name="new_user_role" class="btn btn-primary centered"    value="save">Create</button>
    </div>
</form>
      </div>
     
     
    </div>
  </div>
</div>





      <link rel="stylesheet" href="css/bootstrap-multiselect.css" />
<script src="js/bootstrap-multiselect.js"></script>

<!-- ------------- FOR EDITING USER'S SCREENS    -->



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
            <input  class="form-control"  name="role_name" placeholder="Role Name"  value="<?php echo  $role_table_row['user_role_name']?>">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Browser</label>
        <div class="col-sm-5">
        
        <?php 
        $user_screens = unserialize($role_table_row['user_role_screens']);
        ?>
            <select class="form-control" name="screens[]" multiple>
        <?php 
        



  $all_assets_query = "SELECT * FROM `".$screens_table."`;";
$all_assets = mysql_query($all_assets_query);
 
while($row = mysql_fetch_array($all_assets)) {
	
	if(in_array($row['id'] , $user_screens))
		$selected  = 'selected';
		else 
		$selected =  '';
	
echo '<option '.  $selected .'  value ="'.$row['id'].'" >'.$row['screen_name'].'</option>';

 
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

 




<!-- ------------- FOR EDITING USERS    -->



  <?php 
  $users_table_query = "SELECT * FROM `".$users_table."`;";
$users_table_query_result= mysql_query($users_table_query);
while($users_table_query_result_row= mysql_fetch_array($users_table_query_result)) {

 
?>


<div class="modal fade"  id="users_modal_<?php echo  $users_table_query_result_row['google_id']?>">
  <div class="modal-dialog">
    <div class="modal-content">


<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="role_screens_modal_Label">Assign Role for</h4>
        
        </div>
        
        
        
        
<form id="multiselectForm_<?php $users_table_query_result_row['google_id']?>"  action=""  method="post" class="form-horizontal" style="margin-top:30px;">


 

    <div class="form-group">
        <label class="col-sm-3 control-label"> <?php echo  $users_table_query_result_row['google_name']?></label>
        <div class="col-sm-5">
        
   
        
            <select class="form-control" name="users_user_role_id"  >
<?php 

  $user_role_table_query = "SELECT * FROM `".$user_roles_table."`;";
$user_role_table_query_results= mysql_query($user_role_table_query);
while($row_user_role_table = mysql_fetch_array($user_role_table_query_results)) {
	
 	
	if($row_user_role_table['user_role_id'] == $users_table_query_result_row['users_user_role_id'])
	$selected = 'selected';
	else 
	$selected = '';
 	
echo '<option '.$selected .'  value ="'.$row_user_role_table['user_role_id'].'" >'.$row_user_role_table['user_role_name'].'</option>';
 
}
?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <button type="submit"    value ="<?php echo  $users_table_query_result_row['google_id']?>"  name="update_users_user_role"class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
}?>

 
 
 

<!-- ------------- FOR adding SCREENS    --->



 


<div class="modal fade"  id="add_user_screens_modal">
  <div class="modal-dialog">
    <div class="modal-content">


<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="role_screens_modal_Label">Add new screen</h4>
        
        </div>
        
        
        
        
<form  action=""  method="post" class="form-horizontal" style="margin-top:30px;">


 

    <div class="form-group">
        <label class="col-sm-3 control-label"> Screen name:</label>
        <div class="col-sm-5">
        
                    <input  class="form-control"  name="new_screen_name" placeholder="Screen Name" >
        
        
   
     
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <button type="submit"       name="add_screen"  class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 
 

<!-- ------------- FOR EDITING SCREEENS    -->



  <?php 
  $user_screens_query = "SELECT * FROM `".$screens_table."`;";
$user_screens_query_result= mysql_query($user_screens_query);
while($user_screens_query_result_row= mysql_fetch_array($user_screens_query_result)) {
?>


<div class="modal fade"  id="screens_modal_<?php echo  $user_screens_query_result_row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">


<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="role_screens_modal_Label">Edit Screen</h4>
        
        </div>
        
        
        
        
<form id="multiselectForm_<?php $user_screens_query_result_row['id']  ;?>"  action=""  method="post" class="form-horizontal" style="margin-top:30px;">


 
 
 <div class="form-group">
        <label class="col-sm-3 control-label"> Screen ID:</label>
        <div class="col-sm-5">
        
                            <input  class="form-control"  name="edit_screen_id" placeholder="Screen ID"   value = "<?php  echo  $user_screens_query_result_row['id']  ;?>">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label"> Screen name:</label>
        <div class="col-sm-5">
        
                            <input  class="form-control"  name="edit_screen_name" placeholder="Screen Name"   value = "<?php  echo  $user_screens_query_result_row['screen_name']  ;?>">
        </div>
    </div>
    
    
    
    

    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <button type="submit"  value="<?php  echo $user_screens_query_result_row['id']  ;?>"    name="edit_screen_name_from"class="btn btn-primary">Update</button>
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="col-sm-12 control-label  ">
        
        <p class="bg-danger   text-danger"> 
        
Warning : Editing the screen id may affect  user role's screen configuration. Proceed carefully.        
        </p>
        </div>
        </div>
        
     
</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 

}
	}
else{

echo '<div class="row  ">
			<div class=" col-md-12 col-md-offset-2  vcenter">
			<h1> YOU ARE NOT AUTHORIZED TO ACCESS THIS PAGE</h1>
			<a href="dashboard.php"> Back to dashboard </a>
			</div>
			</div>';
}

 
 

include_once 'footer-pop.php';

?>



 
 
 



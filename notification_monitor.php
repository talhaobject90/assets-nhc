<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	if($_SESSION['authorization_status'])
	{
	
	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		$mysql_query = "DELETE FROM `".$notify_table."` WHERE `id` =".$delete_id.";";
		mysql_query($mysql_query);
		
		}
	
	?>


<div class="col-md-9 col-lg-10" id="content">
<div class="row">
<div class="canvas col-md-12" id="main-canvas">
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Notifications</h1>
<div class="page-menus">
<a href="notify_new.php"><i class="icon fa fa-plus"></i><span>Create new notification</span></a></div>



</div>

 
<form class="form-search"   role="form"   accept-charset="UTF-8"    action =""  method="get"   style="float:right;">
    <div class="input-append  form-group">
        <input type="text"  placeholder="Notification name"   name="search" class="span2 search-query">
        <button type="submit" class="btn"  ><i class="fa fa-search icon"></i></button>
        
    </div>
</form>
<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>

</div>
 
<div class="row">
<div class="page-content col-md-12">
 
<?php 

if(isset($_GET['search']))
	  $all_assets_query = "SELECT * FROM `".$notify_table."`   WHERE   `notification_type` LIKE '%".$_GET['search']."%';";
else
  $all_assets_query = "SELECT * FROM `".$notify_table."`;";
$all_assets = mysql_query($all_assets_query);
if( mysql_num_rows($all_assets) == 0){
	echo '<div class="row">
<div id="notices">
<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
  <p>No results found ! </p>
</div> 
				</div>

</div>';
	}
else{


echo '<table class="table table-hover">';
echo '<th>ID</th><th>Notification Type</th><th>Send to</th><th>Days to send notification</th> <th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
 
  $all_assets_query = "SELECT * FROM `".$users_table."`   WHERE   `google_id`  = '".$row['send_to']."';";
  $all_assets_results = mysql_query($all_assets_query);
while($user_row = mysql_fetch_array($all_assets_results)) {
$user_name = $user_row['google_name'];
}


 




echo '<tr ><td>'.$row['id'].'</td><td>'.$row['notification_type'].'</td><td>'.$user_name.'</td><td>'.$row['days_before'].'</td> <td><a href="notify_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="notification_monitor.php?delete='.$row['id'].'"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

}
echo '</table>';
}
?>

</div>
</div>
</section>

</div>
</div>
</div>
	<?php
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
<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	//include_once ('classes.php');
	if($_SESSION['authorization_status'])
	{
	
 
	
	?>


<div class="col-md-9 col-lg-10" id="content">
<div class="row">
<div class="canvas col-md-12" id="main-canvas">
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Notification Map</h1>
</div>


 
 
<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>

</div>


<?php  
$allNotifyQuery= "SELECT * FROM `".$notify_table."`;";
$allNotifyResult= mysql_query($allNotifyQuery);



?>
 
<div class="row">
<div class="page-content col-md-12">
<form action="#" method  ="post">
<table class="table">
<thead><th></th><th>First Notification</th><th>Second Notification</th><th>Final Notification</th></thead>
<tbody>
<tr><td></td><td><select class="form-control" multiple  name="roles_1[]">
<?php    $all_assets_query = "SELECT * FROM `".$user_roles_table."`;";
$all_assets = mysql_query($all_assets_query);
while($row = mysql_fetch_array($all_assets)) {
	$userRoleQuery = "SELECT *  FROM `notify` WHERE `send_to` = '".$row['user_role_id']."' AND `stage` = '1' ;";
	echo '<option value="'.$row['user_role_id'].'" '.(mysql_num_rows(mysql_query($userRoleQuery)) > 0?'selected':'').' >'.$row['user_role_name'].'</option>';
}
?>
</select></td>
<td><select class="form-control" multiple name="roles_2[]">
<?php    $all_assets_query = "SELECT * FROM `".$user_roles_table."`;";
$all_assets = mysql_query($all_assets_query);
while($row = mysql_fetch_array($all_assets)) {
	$userRoleQuery = "SELECT *  FROM `notify` WHERE `send_to` = '".$row['user_role_id']."' AND `stage` = '2' ;";
	echo '<option value="'.$row['user_role_id'].'"  '.(mysql_num_rows(mysql_query($userRoleQuery)) > 0?'selected':'').'  >'.$row['user_role_name'].'</option>';
}
?>
</select></td>
<td><select class="form-control" multiple  name="roles_3[]">
<?php    $all_assets_query = "SELECT * FROM `".$user_roles_table."`;";
$all_assets = mysql_query($all_assets_query);
while($row = mysql_fetch_array($all_assets)) {
	$userRoleQuery = "SELECT *  FROM `notify` WHERE `send_to` = '".$row['user_role_id']."' AND `stage` = '3' ;";
	echo '<option value="'.$row['user_role_id'].'"  '.(mysql_num_rows(mysql_query($userRoleQuery)) > 0?'selected':'').' >'.$row['user_role_name'].'</option>';
}
?>
</select></td>
</tr>
<tr>
<td>Insurance Renewal</td>
<td><select class="form-control" name="ins_1">
<?php  for($i = 0 ; $i <= 365; $i++){ 
	echo $DayQuery = "SELECT `days_before`  FROM `notify` WHERE `notification_type` = 'Insurance Expiry' AND `stage` = 1 ;";
	$DayQueryResult= mysql_query($DayQuery);
	 $firstrow = mysql_fetch_assoc($DayQueryResult);
	echo '<option value="'.$i.'"  '.($i == $firstrow['days_before'] ?'selected':'').'>'.($i==0?'Dont Sent':$i).'</option>'; 
}?></select></td>
<td><select class="form-control"  name="ins_2">
<?php  for($i = 0 ; $i <= 365; $i++){ 
	echo $DayQuery = "SELECT `days_before`  FROM `notify` WHERE `notification_type` = 'Insurance Expiry' AND `stage` = 2 ;";
	$DayQueryResult= mysql_query($DayQuery);
	 $firstrow = mysql_fetch_assoc($DayQueryResult);
	echo '<option value="'.$i.'"  '.($i == $firstrow['days_before'] ?'selected':'').'>'.($i==0?'Dont Sent':$i).'</option>'; 
}?>
</select></td>
<td><select class="form-control" name="ins_3">
<?php  for($i = 0 ; $i <= 365; $i++){ 
		echo $DayQuery = "SELECT `days_before`  FROM `notify` WHERE `notification_type` = 'Insurance Expiry' AND `stage` = 3 ;";
		$DayQueryResult= mysql_query($DayQuery);
		$firstrow = mysql_fetch_assoc($DayQueryResult);
		echo '<option value="'.$i.'"  '.($i == $firstrow['days_before'] ?'selected':'').'>'.($i==0?'Dont Sent':$i).'</option>';
	}?>
	</select></td>
</tr>
<tr>
<td>Istemara Renewal</td>
<td><select class="form-control" name="ist_1"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option  value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="ist_2"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option  value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="ist_3"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option  value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
</tr>
<tr>
<td>TUV Sticker Renewal</td>
<td><select class="form-control"  name="tuv_1"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option  value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="tuv_2"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option  value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="tuv_3"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option  value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
</tr>
<tr>
<td>Client Sticker Renewal</td>
<td><select class="form-control" name="cli_1"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="cli_2"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="cli_3"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
</tr>
<tr>
<td>MOT Permit Renewal</td>
<td><select class="form-control" name="mot_1"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="mot_2"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="mot_3"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
</tr>
<tr>
<td>MVPI Renewal</td>
<td><select class="form-control" name="mvpi_1"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="mvpi_2"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="mvpi_3"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
</tr>
<tr>
<td>Preventive Maintenance  Renewal</td>
<td><select class="form-control" name="pvt_1"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="pvt_2"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
<td><select class="form-control" name="pvt_3"><?php  for($i = 0 ; $i <= 365; $i++){ echo '<option value="'.$i.'">'.($i==0?'Dont Sent':$i).'</option>'; }?></select></td>
</tr>


</tbody>
</table>

<input class="btn btn-default"  type="submit"  name="update_notification"  value="Update"  style="background-color: #ffe400;margin-bottom:10px;float:right;">

</form>
 
 

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
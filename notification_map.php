<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	include_once ('classes.php');
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

$newMap = new GenerateNotfication(); // object for form generaiton
$allNotifyQuery= "SELECT * FROM `".$notify_table."`;";
$allNotifyResult= mysql_query($allNotifyQuery);

?>
 
<div class="row">
<div class="page-content col-md-12">
<form action="" method  ="post">
<table class="table">
<thead><th></th><th>First Notification</th><th>Second Notification</th><th>Final Notification</th></thead>
<tbody>
<tr><td></td>
<td><?php  echo $newMap->genRoleSelect('roles_1[]', '1', $tables)?></td>
<td><?php  echo $newMap->genRoleSelect('roles_2[]', '2', $tables)?></td>
<td><?php  echo $newMap->genRoleSelect('roles_3[]', '3', $tables)?></td>

</tr>
<tr>
<td>Insurance Renewal</td>
<td><?php echo  $newMap->genDateSelect('ins_1','Insurance Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('ins_2','Insurance Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('ins_3','Insurance Expiry','3') ; ?></td>
</tr>
<tr>
<td>Istemara Renewal</td>
<td><?php echo  $newMap->genDateSelect('ist_1','Istemara Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('ist_2','Istemara Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('ist_3','Istemara Expiry','3') ; ?></td>
</tr>
<tr>
<td>TUV Sticker Renewal</td>
<td><?php echo  $newMap->genDateSelect('tuv_1','TUV Sticker Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('tuv_2','TUV Sticker Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('tuv_3','TUV Sticker Expiry','3') ; ?></td></tr>
<tr>
<td>Client Sticker Renewal</td>
<td><?php echo  $newMap->genDateSelect('cli_1','Client Sticker Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('cli_2','Client Sticker Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('cli_3','Client Sticker Expiry','3') ; ?></td>
 </tr>
<tr>
<td>MOT Permit Renewal</td>
<td><?php echo  $newMap->genDateSelect('mot_1','MOT License Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('mot_2','MOT License Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('mot_3','MOT License Expiry','3') ; ?></td>
 </tr>
<tr>
<td>MVPI Renewal</td>
<td><?php echo  $newMap->genDateSelect('mvpi_1','MVPI Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('mvpi_2','MVPI Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('mvpi_3','MVPI Expiry','3') ; ?></td>
</tr>
<tr>
<td>Preventive Maintenance  Renewal</td>
<td><?php echo  $newMap->genDateSelect('pvt_1','Preventive Maintenance Expiry','1') ; ?></td>
<td><?php echo  $newMap->genDateSelect('pvt_2','Preventive Maintenance Expiry','2') ; ?></td>
<td><?php echo  $newMap->genDateSelect('pvt_3','Preventive Maintenance Expiry','3') ; ?></td>
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
<?php 
	// ADDED BY MARS & FARIS
	
	include_once('header-pop.php');
	
	include_once('db_connect.php');
?>
<div class="col-md-9 col-lg-10" id="content" style="width:900px;">
	<div class="row">
		<div class="canvas col-md-12" id="main-canvas"  style="padding-top: 50px;">
<!--Approver Details-->
<div class="row">
<div class="page-header">
<h1 style="margin-top:-15px;margin-left:18px;">Custodian Notification</h1>
<input type="button" name="main_dashboard" value="Home"  class="btn btn-primary pull-right" onclick='window.location="dashboard.php";'>
</div>

<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>
</div>
<div class="row">
<div class="page-content col-md-12">
<div style="margin-top:-22px;">
<?php 
  $all_assets_query = "SELECT * FROM `".$custodian_table."`;";
$all_assets = mysql_query($all_assets_query);

echo '<table class="table table-hover">';
echo '<th>ID</th><th>Asset Name</th><th>Status</th><th>Details</th><th>Delete</th>';
while($row = mysql_fetch_array($all_assets)) {
	$status="";
		switch($row['status'])
		{
			case 1:
				$status="Request for Approval";
				break;
			case 2:
				$status="Approval Pending";
				break;
			case 3:
				$status="Approved";
				break;
			case 4:
				$status="Approval Cancelled";
				break;
		}
		
		
	$assets_fetch = "SELECT name FROM `".$assets_table."`where id=".$row['assets_id'].";";
	$assets = mysql_query($assets_fetch);
	$asset_name=mysql_fetch_assoc($assets);
	
	
	
echo '<tr ><td>'.$row['id'].'</td><td>'.$asset_name['name'].'</td><td>'.$status.'</td><td><a href="custodian_email.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="config.php?delete='.$row['id'].'&delete_cust=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';
}
echo '</table>';
?>

</div>
</div>
</section>
</div>
</div>
</div>	

 
<?php   include_once('footer-pop.php'); ?>

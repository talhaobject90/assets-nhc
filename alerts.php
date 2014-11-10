<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	
	
	
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
			<input name="utf8" type="hidden" value="✓">
 			<input
			name="authenticity_token" type="hidden"
					value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg=">
					</div>
					<input id="current_time" name="current_time" type="hidden"
							value="1413815433">
		
				<div class="row">		
						<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#vendor" role="tab" data-toggle="tab">Alerts</a></li>
  <li  style="display: none;"><a href="#asset_category" role="tab" data-toggle="tab">Asset Categories</a></li>
  <li  style="display: none;" ><a href="#department" role="tab" data-toggle="tab">Departments</a></li>
</ul>

<!-- Tab panes -->
<!-- ---- VENDOR TAB CONTENT -->
<div class="tab-content">
  <div class="tab-pane   active" id="vendor">
   
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Alerts</h1>
<div class="page-menus">
<!-- <a href="vendor_new.php"><i class="icon fa fa-plus"></i><span>Create new vendor</span></a></div> -->
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
  $all_assets_cat_query = "SELECT * FROM `".$notifications_table."`  ORDER BY `expiry_date` ASC;";
$all_assets = mysql_query($all_assets_cat_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Asset ID</th><th>Asset Name</th> <th>Expiry Type</th><th>Expriy Date</th><th>Notified on</th>';
while($row = mysql_fetch_array($all_assets)) {
   $today = date("Y-m-d");

$today = new DateTime($today);
  $row['expiry_date'];
 $expiry_date = new DateTime($row['expiry_date']);
$interval = $today->diff($expiry_date);
    $left =  $interval->format('%R%a ');
 
$class = '';
if($left < 30 && $left >7)
	$class = 'warning';
elseif($left < 7   )
	$class = 'danger';


	


 
echo '<tr  class="'.$class.'" ><td>'.$row['id'].'</td><td>'.$row['asset_id'].'</td><td>'.$row['asset_name'].'</td><td>'.$row['expiry_type'].'</td><td>'.$row['expiry_date'].'</td><td>'.$row['notified_on'].'</td></tr>';

}
echo '</table>';
?>

</div>
</div>
</section>
 
  </div>
  
  <!--  ASSET PANE CONTENT -->
  
  <div class="tab-pane  "  id="asset_category">
  
  
  <section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Asset Categories</h1>
<div class="page-menus">
<a href="asset_category_new.php"><i class="icon fa fa-plus"></i><span>Create new asset category</span></a></div>
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
  $all_assets_query = "SELECT * FROM `".$assets_category_table."`;";
$all_assets = mysql_query($all_assets_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Asset Category Name</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
echo '<tr ><td>'.$row['id'].'</td><td>'.$row['asset_category_name'].'</td><td><a href="asset_category_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="config.php?delete='.$row['id'].'&del_category=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';
}
echo '</table>';
?>

</div>
</div>
</section>
  
  
  </div>
  <div class="tab-pane   " id="department">
  
  
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
  $all_assets_query = "SELECT * FROM `".$department_table."`;";
$all_assets = mysql_query($all_assets_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Department Name</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
echo '<tr ><td>'.$row['id'].'</td><td>'.$row['department_name'].'</td><td><a href="department_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="config.php?delete='.$row['id'].'&del_department=true"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

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
 

 
 
<?php 	include_once('footer-pop.php'); ?>


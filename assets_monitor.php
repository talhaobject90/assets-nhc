<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	if($_SESSION['authorization_status'])
	{
	
	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		$mysql_query = "DELETE FROM `".$assets_table."` WHERE `id` =".$delete_id.";";
		mysql_query($mysql_query);
		$mysql_query = "DELETE FROM `".$tickets_table."` WHERE `asset_id` =".$delete_id.";";
		mysql_query($mysql_query);
		
		}
	
	?>


<div class="col-md-9 col-lg-10" id="content">
<div class="row">
<div class="canvas col-md-12" id="main-canvas">
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Assets</h1>
<div class="page-menus">
<a href="assets_new.php"><i class="icon fa fa-plus"></i><span>Create new asset</span></a></div>



</div>

 
<form class="form-search"   role="form"   accept-charset="UTF-8"    action =""  method="get"   style="float:right;">
    <div class="input-append  form-group">
        <input type="text"  placeholder="Search Asset"   name="search" class="span2 search-query">
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
$all_assets_query =  "SELECT *  FROM `".$assets_table."` WHERE `name` LIKE '%".$_GET['search']."%'  OR `id` LIKE '%".$_GET['search']."%' OR `description` LIKE '%".$_GET['search']."%' OR `location` LIKE '%".$_GET['search']."%'
OR `custodian` LIKE '%".$_GET['search']."%'  OR `vendor` LIKE '%".$_GET['search']."%'  OR `asset_category` LIKE '%".$_GET['search']."%'  OR `department` LIKE '%".$_GET['search']."%'
OR `vehicle_number` LIKE '%".$_GET['search']."%'  OR `project` LIKE '%".$_GET['search']."%'  OR `status` LIKE '%".$_GET['search']."%'";
else
  $all_assets_query = "SELECT * FROM `".$assets_table."`;";
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
echo '<th>ID</th><th>Asset Name</th><th>Asset Location</th><th>Custodian</th><th>Status</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
if($row['status'] == 'active')
	$status ='Active';
elseif ($row['status'] == 'inactive')
	$status = 'Inactive';
elseif ($row['status'] == 'under_maintenance')
	$status = 'Under Maintenance';
if(strlen($row['custodian']) >15)
	$append = '....';
	else 
		$append = '';


echo '<tr ><td>'.$row['id'].'</td><td><a href="assets_view.php?edit='.$row['id'].'">'.$row['name'].'</a></td><td>'.$row['location'].'</td><td>'.substr($row['custodian'],0,15).$append.'</td><td  class="text-capitalize">'.$status.'</td><td><a href="assets_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="assets_monitor.php?delete='.$row['id'].'"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

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
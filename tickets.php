				<?php

/*
 * 		The concepts of tickets as following
 * 		# When a notification is send ticket along with the  asset details is send.
 * 		# and a ticket is opened and remained opened until the system is entered with new date
 * 		# Each asset is opened for a ticket  
 * 
 */

 
include_once('header-pop.php');

include_once('db_connect.php');
if($_SESSION['authorization_status'])
{
 

	?>


<div class="col-md-9 col-lg-10" id="content">
<div class="row">
<div class="canvas col-md-12" id="main-canvas">
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Open Tickets</h1>
<!-- <div class="page-menus">
<a href="assets_new.php"><i class="icon fa fa-plus"></i><span>Create new asset</span></a></div> -->



</div>

 
<form class="form-search"   role="form"   accept-charset="UTF-8"    action =""  method="get"   style="float:right;display:none">
    <div class="input-append  form-group">
        <input type="text"  placeholder="Search Ticket"   name="search" class="span2 search-query">
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
$all_assets_query =  "SELECT *  FROM `".$tickets_table."` WHERE `id` LIKE '%".$_GET['search']."%' OR `asset_id` LIKE '%".$_GET['search']."%' OR `expiry_type` LIKE '%".$_GET['search']."%'
OR `expiring_date` LIKE '%".$_GET['search']."%'  OR `status` LIKE '%".$_GET['search']."%' ";
else
  $all_assets_query = "SELECT * FROM `".$tickets_table."`;";
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
 
	
	
echo '<table class="table table-hover pagination_table ">';
echo '<thead><th>ID</th><th>Asset ID</th><th>Expiry Type</th><th>Expiry Date</th><th>Expiring in(Days)</th><th>Status</th><th></th></thead><tbody>';
while($row = mysql_fetch_array($all_assets)) {

$today = date("Y-m-d");
$today = new DateTime($today);
  $expiry_date = $row['expiring_date'];
$expiry_date = new DateTime ($row['expiring_date']);
$interval = $today->diff ( $expiry_date );
  $left = $interval->format ( '%a ' );
if($left < 0)
	$left = 'Expired';


echo '<tr ><td>'.$row['id'].'</td><td>'.$row['asset_id'].'</td><td>'.$row['expiry_type'].'</td><td>'.$row['expiring_date'].'</td><td>'.$left.'</td><td  style=" text-transform: capitalize; " >'.$row['status'].'</td><td><a href="ticket_view.php?view='.$row['id'].'"><i class="fa fa-folder-open fa-2x" alt="View Details"></i></a></td></tr>';
}
echo '</tbody></table>';
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


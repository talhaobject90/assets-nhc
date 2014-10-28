<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	
	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		$mysql_query = "DELETE FROM `".$assets_table."` WHERE `id` =".$delete_id.";";
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

<h4>
<!-- <center>
Toggle the icons to quickly filter by status
</center> -->
</h4>
</div>
<div class="row">
<div class="page-content col-md-12">
<!-- <div class="row">
<div class="col-md-12" id="sorting-purchases">
<a class="active" href="/purchases" onclick="sortingPurchase()" title="All"><div class="pp small"><img alt="All" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/all-f5e32353f2bbaee0ba1e7084438e1f46.png"></div>
<span>All</span>
</a><a href="/purchases?filter=new" onclick="sortingPurchase()" title="New"><div class="pp small"><img alt="New" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/new-f6e1e0d1c302e7f0182c16f6806b2c38.png"></div>
<span>New</span>
</a><a href="/purchases?filter=cancelled" onclick="sortingPurchase()" title="Cancelled"><div class="pp small"><img alt="Cancelled" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/cancelled-24c67085b13bce55dba4060d040e8d8f.png"></div>
<span>Cancelled</span>
</a><a href="/purchases?filter=approved" onclick="sortingPurchase()" title="Approved"><div class="pp small"><img alt="Approved" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/approved-e4c6c19accaf68b544230ff3d2efa8a0.png"></div>
<span>Approved</span>
</a><a href="/purchases?filter=rejected" onclick="sortingPurchase()" title="Rejected"><div class="pp small"><img alt="Rejected" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/rejected-24c67085b13bce55dba4060d040e8d8f.png"></div>
<span>Rejected</span>
</a><a href="/purchases?filter=ordered" onclick="sortingPurchase()" title="Ordered"><div class="pp small"><img alt="Ordered" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/ordered-7d546737165f075d8256fae261490161.png"></div>
<span>Ordered</span>
</a><a href="/purchases?filter=received" onclick="sortingPurchase()" title="Received"><div class="pp small"><img alt="Received" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/received-714f8eb4af101e9a0ecca19d214e79c1.png"></div>
<span>Received</span>
</a><a href="/purchases?filter=paid" onclick="sortingPurchase()" title="Paid"><div class="pp small"><img alt="Paid" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/paid-6c6cc98b0e4a03f37671ebd039ed904c.png"></div>
<span>Paid</span>
</a>
</div>
</div>
<div class="row">
<div class="col-md-12" id="list-purchase">
<div class="row purchase line-item" id="purchase-22">

<div class="col-sm-9">
<div class="pp small"><img alt="New" src="https://d1n8cmjuqlpe9.cloudfront.net/assets/filters/new-f6e1e0d1c302e7f0182c16f6806b2c38.png"></div>
<div class="details">
<span class="subject"><a href="/purchases/22">Test</a></span>
<span class="stats">
( 1 item, 0 vendors )
</span>
<div class="requestor">
by Mohammed Talha
</div>
</div>
</div>
<div class="col-sm-3">
<div class="when">less than a minute ago</div>
</div>
</div>

</div>
</div>
-->
<?php 

  $all_assets_query = "SELECT * FROM `".$assets_table."`;";
$all_assets = mysql_query($all_assets_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Asset Name</th><th>Asset Location</th><th>Custodian</th><th>Status</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
if($row['status'] == 'active')
	$status ='Active';
elseif ($row['status'] == 'inactive')
	$status = 'Inactive';
elseif ($row['status'] == 'under_maintenance')
	$status = 'Under Maintenance';
echo '<tr ><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['location'].'</td><td>'.$row['custodian'].'</td><td  class="text-capitalize">'.$status.'</td><td><a href="assets_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="assets_monitor.php?delete='.$row['id'].'"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

}
echo '<table';
?>

</div>
</div>
</section>

</div>
</div>
</div>
	<?php   include_once('footer-pop.php'); ?>
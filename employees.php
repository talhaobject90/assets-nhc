<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	
	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		$mysql_query = "DELETE FROM `".$employee_table."` WHERE `id` =".$delete_id.";";
		mysql_query($mysql_query);
		
		}
	
	?>


<div class="col-md-9 col-lg-10" id="content">
<div class="row">
<div class="canvas col-md-12" id="main-canvas">
<section class="index col-md-12" id="purchase">
<div class="row">
<div class="page-header">
<h1>Employees</h1>
<div class="page-menus">
<a href="employee_new.php"><i class="icon fa fa-plus"></i><span>Add new employee</span></a></div>
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
  $all_assets_query = "SELECT * FROM `".$employee_table."`;";
$all_assets = mysql_query($all_assets_query);
echo '<table class="table table-hover">';
echo '<th>ID</th><th>Employee Name</th><th>Email</th><th>Department</th><th>Phone</th><th>Status</th><th></th><th></th>';
while($row = mysql_fetch_array($all_assets)) {
if($row['employee_status'] == 'active')
	$status ='Active';
elseif ($row['employee_status'] == 'inactive')
	$status = 'Inactive';
echo '<tr ><td>'.$row['id'].'</td><td>'.$row['employee_name'].'</td><td>'.$row['employee_email'].'</td><td>'.$row['employee_department'].'</td><td>'.$row['employee_phone'].'</td><td  class="text-capitalize">'.$status.'</td><td><a href="employee_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td> <td><a href="employees.php?delete='.$row['id'].'"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td> </tr>';

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
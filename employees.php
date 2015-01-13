<?php 
	include_once('header-pop.php');
	
	include_once('db_connect.php');
	
	if(isset($_POST['truncate']))
	{
		$mysql_query = "TRUNCATE TABLE`".$employee_table."` ;";
		mysql_query($mysql_query);
	}
		
	
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
<a href="employee_new.php"><i class="icon fa fa-plus"></i><span>Add new employee</span></a>
<a href="import_excel.php"><i class="icon fa fa-plus"></i><span>Import employees</span></a>

<form onsubmit="return confirm('Do you really want to truncate employees table ?');"  action="" method="post">
<a ><input type="submit" name="truncate"  value = "Truncate"></a>
</form>

</div>
</div>

<form class="form-search"   role="form"   accept-charset="UTF-8"    action =""  method="get"   style="float:right;display:none;">
    <div class="input-append  form-group">
        <input type="text"  placeholder="Search employee"   name="search" class="span2 search-query">
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
$all_assets_query = " SELECT *  FROM `".$employee_table."` WHERE `first_name` LIKE '%".$_GET['search']."%'  OR `id` LIKE '%".$_GET['search']."%'   OR `last_name` LIKE '%".$_GET['search']."%' 
OR `employee_email` LIKE '%".$_GET['search']."%' 
OR `user_name` LIKE '%".$_GET['search']."%'  OR `designation` LIKE '%".$_GET['search']."%' 
 OR `station` LIKE '%".$_GET['search']."%'  OR `employee_department` LIKE '%".$_GET['search']."%'";
else
  $all_assets_query = "SELECT * FROM `".$employee_table."`;";
  $all_assets = mysql_query($all_assets_query);
if( mysql_num_rows($all_assets) == 0){
	echo '<div class="row">
<div id="notices">
<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
  <p>No results found ! </p>
</div> </div>

</div>';
}
else{
echo '<table class="table table-hover pagination_table">';
echo '<thead><th>ID</th><th>Employee Name</th><th>Email</th><th>User Name</th><th>Department</th><th></th><th></th></thead><tbody>';
while($row = mysql_fetch_array($all_assets)) {
 
echo '<tr><td>'.$row['id'].'</td>
    		<td>'.$row['first_name'].' '.$row['last_name'].' </td>
        		<td>'.$row['employee_email'].'</td>
        		<td >'.$row['user_name'].'</td><td >'.$row['employee_department'].'</td>
        		<td><a href="employee_new.php?edit='.$row['id'].'"><img src="images/edit.png"  class="img-responsive" alt="Edit"> </a></td>
		 <td><a href="employees.php?delete='.$row['id'].'"><img src="images/del.png"  class="img-responsive" alt="Delete"> </a></td>

		</tr>';
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
	<?php   include_once('footer-pop.php'); ?>
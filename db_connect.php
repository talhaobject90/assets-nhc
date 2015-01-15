<?php
// Connect to database server





 
	if(strpos($_SERVER['SERVER_NAME'],'localhost') !== false || strpos($_SERVER['SERVER_NAME'],'192.168.1.6') !== false){
		mysql_connect("localhost", "root", "password") or die (mysql_error ());
		$uploads_folder = '/var/www/assets/uploads';
	}
else{
	
	$uploads_folder  =  '/var/lib/openshift/544f43b94382ec6427000496/app-root/runtime/repo/uploads';
	mysql_connect("127.3.13.2", "adminxntQq3s", "s-FSsSggM7q3") or die (mysql_error ());
}

 
// configure table_names;
$assets_table = 'assets';
$assets_category_table = 'assets_category';
$department_table = 'department';
$employee_table = 'employee';
$vendor_table = 'vendor';
$users_table= 'google_users';
$user_roles_table = 'user_roles';
$user_screens_table = 'users_screens';
$screens_table = 'screens';
$notifications_table = 'notifications';
$project_table = 'projects';
$notification_types_table = 'notification_types';
$notify_table = 'notify';
$tickets_table = 'tickets';
$locations_table = 'locations';

$tables = array(
		'assets_table' =>$assets_table,
		'assets_category_table' => $assets_category_table,
		'department_table' =>$department_table,
		'employee_table' => $employee_table,
		 'vendor_table' => $vendor_table,
		 'users_table' =>$users_table,
		'user_roles_table' =>$user_roles_table,
		'user_screens_table' =>$user_screens_table,
		'screens_table' =>$screens_table,
		 'notifications_table' =>$notifications_table,
		'project_table'=>$project_table,
		'notification_types_table' =>$notification_types_table,
		 'notify_table' => $notify_table,
		'tickets_table' =>$tickets_table,
		'locations_table'=>$locations_table);

// Select database
mysql_select_db($assets_table) or die(mysql_error());


// FUNCTION TO DELETE CONTENTS OF  A DIRECTORY RECURSIVELY

function recursiveRemoveDirectory($directory)
{
	foreach(glob("{$directory}/*") as $file)
	{
		if(is_dir($file)) {
			recursiveRemoveDirectory($file);
		} else {
			unlink($file);
		}
	}
	rmdir($directory);
}




 

 

<?php
// Connect to database server

	if(strpos($_SERVER['SERVER_NAME'],'localhost') !== false)
		mysql_connect("localhost", "root", "password") or die (mysql_error ());
else
	mysql_connect("127.3.13.2", "adminxntQq3s", "s-FSsSggM7q3") or die (mysql_error ());

 
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







// Select database
mysql_select_db($assets_table) or die(mysql_error());
 
<?php
// Connect to database server

if($_SERVER['SERVER_NAME'] == 'assets-newhorizons.rhcloud.com')
	mysql_connect("127.3.13.2", "adminxntQq3s", "s-FSsSggM7q3") or die (mysql_error ());
else
mysql_connect("localhost", "root", "password") or die (mysql_error ());

 
// configure table_names;
$assets_table = 'assets';

// Select database
mysql_select_db($assets_table) or die(mysql_error());
 
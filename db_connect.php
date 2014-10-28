<?php
// Connect to database server
mysql_connect("localhost", "root", "password") or die (mysql_error ());

// configure table_names;
$assets_table = 'assets';

// Select database
mysql_select_db($assets_table) or die(mysql_error());


// SQL query
//$strSQL = "SELECT * FROM assets";

// Execute the query (the recordset $rs contains the result)
//$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array
//while($row = mysql_fetch_array($rs)) {

	// Write the value of the column FirstName (which is now in the array $row)
//	echo $row['name'] . "<br />";

//}

// Close the database connection
//mysql_close();
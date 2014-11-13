<?php
ini_set("display_errors",1);
require_once 'excel_reader2.php';
require_once 'db.php';

$data = new Spreadsheet_Excel_Reader("Report.xls");

$databasetable  = 'employee';

echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";

$html="<table border='1'>";
for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
{	
	if(count($data->sheets[$i][cells])>0) // checking sheet not empty
	{
		echo "Sheet $i:<br /><br />Total rows in sheet $i  ".count($data->sheets[$i][cells])."<br />";
		for($j=3;$j<=count($data->sheets[$i][cells]);$j++) // loop used to get each row of the sheet
		{ 
			$html.="<tr>";
			for($k=1;$k<=count($data->sheets[$i][cells][$j]);$k++) // This loop is created to get data in a table format.
			{
				$html.="<td>";
				$html.=$data->sheets[$i][cells][$j][$k];
				$html.="</td>";
			}
			$data->sheets[$i][cells][$j][1];
			
			$firstname = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][7]);
			$lastname = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][8]);
			$email = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][10]);
			$username = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][9]);
			$designation = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][4]);
			$station = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][5]);
			$department = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][6]);
			$employee_phone = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][16]);
			if($employee_phone == '')
			$employee_phone = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][17]);
			if($employee_phone == '')
			$employee_phone = mysqli_real_escape_string($connection,$data->sheets[$i][cells][$j][18]);
			
			 
			
			
			
			
		  	$query = "insert into `".$databasetable."` (
first_name,
last_name,
 employee_email,
user_name,
designation,
station,
employee_department,
employee_phone
			
) values(
'".$firstname."',
 '".$lastname."',
 '".$email."',
 '".$username."',
 '".$designation."',
 '".$station."',
 '".$department."',
 '".$employee_phone."' ) ;";
				
			
			mysqli_query($connection,$query);
			$html.="</tr>";
		}
	}
	
}

$html.="</table>";
echo $html;
echo "<br />Data Inserted in dababase";
?>
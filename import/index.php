 
 
 
 
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo - Import Excel file data in mysql database using PHP, Upload Excel file data in database</title>
<meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
<meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

 

<tr><td colspan="2" style="font:bold 15px arial; text-align:center; padding:0 0 5px 0;">Data Uploading System</td></tr>

<tr>

<td width="50%" style="font:bold 12px tahoma, arial, sans-serif; text-align:right; border-bottom:1px solid #eee; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Select file</td>

<td width="50%" style="border-bottom:1px solid #eee; padding:5px;"><input type="file" name="file" id="file" /></td>

</tr>





<tr>

<td style="font:bold 12px tahoma, arial, sans-serif; text-align:right; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Submit</td>

<td width="50%" style=" padding:5px;"><input type="submit" name="submit" /></td>

</tr>

</table>

 



</form>		

<?php


$uploadedStatus = 0;

if ( isset($_POST["submit"]) ) {
	if ( isset($_FILES["file"])) {
		print_r($_FILES);
		
		//if there was an error uploading the file
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else {
			if (file_exists($_FILES["file"]["name"])) {
 				unlink($_FILES["file"]["name"]);
			}
			$storagename = "Report.xlsx";
			move_uploaded_file($_FILES["file"]["tmp_name"],  $storagename);
			$uploadedStatus = 1;
		}
	} else {
		echo "No file selected <br />";
	}
}

 
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS","password"); // set database password
define ("DB_NAME","assets"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

$databasetable = "employee";



/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'Report.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
  $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=3;$i<=$arrayCount;$i++){
  $firstname= trim($allDataInSheet[$i]["G"]);
     $lastname= trim($allDataInSheet[$i]["H"]);
     $email= trim($allDataInSheet[$i]["J"]);
     $username= trim($allDataInSheet[$i]["I"]);
  $designation= trim($allDataInSheet[$i]["D"]);
     $station= trim($allDataInSheet[$i]["E"]);
     $department= trim($allDataInSheet[$i]["F"]);
     $employee_phone= trim($allDataInSheet[$i]["P"]);
  if($employee_phone == '')
  	   $employee_phone= trim($allDataInSheet[$i]["Q"]);
  if($employee_phone)
  	   $employee_phone= trim($allDataInSheet[$i]["R"]);

    $query = "SELECT first_name FROM `".$databasetable."` WHERE user_name = '".$username."' ;";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["first_name"];
if($existName=="") {
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
 '".$employee_phone."'
);";

$insertTable= mysql_query($query);


$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
<body>
</html>

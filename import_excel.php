 <?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
 


$uploadedStatus = 0;

$msg = '';

if ( isset($_POST["submit"]) ) {
	
	
	
	if ( isset($_FILES["file"])) {
		
  		
		//if there was an error uploading the file
		if ($_FILES["file"]["error"] > 0) {
			echo   "Return Code: " . $_FILES["file"]["error"] . "<br />
					
					";
		}
		else {
			if (file_exists($_FILES["file"]["name"])) {
 				unlink($_FILES["file"]["name"]);
			}
			$storagename = "Report.xlsx";
			move_uploaded_file($_FILES["file"]["tmp_name"],  $storagename);
			$uploadedStatus = 1;
			
			
			
			
			
			/*
			 * 		 IMPORTING DB
			 * 
			 */
			
			/************************ YOUR DATABASE CONNECTION START HERE   ****************************/
			
			
			if(strpos($_SERVER['SERVER_NAME'],'localhost') !== false){
			define ("DB_HOST", "localhost"); // set database host
			define ("DB_USER", "root"); // set database user
			define ("DB_PASS","password"); // set database password
			define ("DB_NAME","assets"); // set database name
			}
			else{
				
				define ("DB_HOST", "127.3.13.2"); // set database host
				define ("DB_USER", "adminxntQq3s"); // set database user
				define ("DB_PASS","s-FSsSggM7q3"); // set database password
				define ("DB_NAME","assets"); // set database name
			}
			
			$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
			$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
			
			$databasetable = "employee";
			
			
			
			/************************ YOUR DATABASE CONNECTION END HERE  ****************************/
			
			
			set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
			include 'php_excel/Classes/PHPExcel/IOFactory.php';
 
			
			// This is the file path to be uploaded.
			$inputFileName = 'Report.xlsx';
			
			
			try {
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
			} catch(Exception $e) {
 				
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}
			
			
			$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
			$inserted = 0;
			
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
			
					$inserted++;
				  	$insertTable= mysql_query($query);
				  	
				if (! $insertTable) {
    
    $msg = '<div class="alert alert-danger  col-md-3 col-md-offset-5" role="alert">
  <p>Check File again and format it properly
		</p>
 </div>';
}
else{
	$msg = '<div class="alert alert-success  col-md-3 col-md-offset-5" role="alert">
  <p>Database is updated with '.$inserted.' record.
		</p>
		<a href="dashboard.php"> Back to Dashboard </a>
</div>';
	
}
 			
			
 				}  
			}
		
		}
	} else {
		$msg = '<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
  <p>No file chosen.</p>
</div>';
	}
	
	if($inserted == 0)
		$msg .= '<div class="alert alert-danger  col-md-2 col-md-offset-5" role="alert">
  <p>No records are added.</p>
</div>';
	
}

?>
 <div class="col-md-9 col-lg-10" id="content">
 		<div class="canvas col-md-12" id="main-canvas">
		
		
 
			<form accept-charset="UTF-8"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="purchase-main-form" >
				 
				 
				<section class="form col-sm-9" id="purchase">
					<div class="row">
						<div class="page-header">

<h1>Import Employees</h1>
</div>
					</div>
					<div class="row">
						<div class="page-content col-sm-12">
							<div class="row">
								<div class="col-md-12">
									<div class="errors-placeholder"></div>

								</div>
							</div>
														 
							<div class="row">
								 
									<label class="sr-only" for="purchase_subject">Subject</label> <input type="file" name="file" id="file" />
										 
								</div>
							</div>
					 
							</div>

							<br>
							<br>

 

						
 												<input class="btn btn-default btn-primary" type="submit" name="submit" value="Import">
 												
 												<a href="employees.php">
 												<input class="btn btn-default" type="button" value="Cancel" style="margin-left:10px;font-weight:bold;&quot;"></a>					
 												
 													</section>
  													
						

						</form><br><br>
										<div class="row"  >
					
						<?php  echo $msg  ; ?>
						
								<div class="alert alert-danger  col-md-8 col-md-offset-2" role="alert"  style=" margin-top: 50px; " >
 													<p>Import employees by uploading the excel file generated from Reports Generator  . </p>
  <p>The excel file should contain all fields available under Employee Reports (Data Columns). This is mandatory </p>
  <p>The excel file should be .xlsx format . The Report Generator is providing old .xls format (Open the .xls file and save it in .xlsx format (2007) )  . </p>
</div>
</div>
 						
					</div>
				
				
		<div class="clear">
		</div>
 







</div>
</div>
<body>
</html>

<?php
include_once 'db_connect.php';





class report {
	var $title;
	var $filename;
	var $tablename;
	var $columnNames; 
	var $password;
	
	function __construct($title = null,$filename = null ,$tablename,$password = null){
 		
 		$this->tablename = $tablename;
 		 $this->columnNames = $this->getColumnNames($tablename);
 		 
 		 if($filename == null)
 		 $this->filename = 'projectEmployees.xlsx';
 		 else
 		 $this->filename = $filename;
 		 
		if($title == null)
		$this->title = 'Assets Report - New Horizons Company';
		else $this->title = $title;
		
		if($password == null)
			$this->password= $null;
		else $this->password = $password;
		
		$this->create_excel($this->tablename);
		$this->download();
		
		
		
	
	}
	
	
	function getColumnNames($tablename){
		
		 
		$columnQuery = "desc ".$tablename.";";
		$columnQuery = mysql_query($columnQuery);
		
		while($rows = mysql_fetch_array($columnQuery)) {
			$columns[]= $rows['Field'];
		}
		return $columns;
	}
	
	
	function MapNames ($columnName){
			if(strpos($columnName, '_') == true){
				$columnName_arr = explode('_', $columnName);
				foreach ($columnName_arr as $val_arr)
				$value .= ' '.$val_arr;
			}else 
				$value = $columnName;
			return $mappedColumn  = strtoupper($value);
 	}
	
	function num2alpha($n)
	{
		for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
			$r = chr($n%26 + 0x41) . $r;
		return $r;
	}
	
	function create_excel($tables){
		
 	
		require  'php_excel/Classes/PHPExcel.php';
		require  'php_excel/Classes/PHPExcel/Writer/Excel2007.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 2;
		$rowCount++;
		$objPHPExcel = $objPHPExcel;
		$rowCount++;
		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(75);
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D1:J1');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:C1');
		$objPHPExcel->getActiveSheet()->getStyle('D1:J1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('D1',$this->title);
	
		$sheet = $objPHPExcel->getActiveSheet();
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Logo');
		$objDrawing->setDescription('Logo');
		$logo = 'images/logo.jpg'; // Provide path to your logo file
		$objDrawing->setPath($logo);
		$objDrawing->setOffsetX(8);    // setOffsetX works properly
		//$objDrawing->setOffsetY(300);  //setOffsetY has no effect
		$objDrawing->setCoordinates('A1');
		$objDrawing->setHeight(100); // logo height
		$objDrawing->setWorksheet($sheet);

		
		foreach ( $this->columnNames  as $key => $value) {
			$cellName = $this->num2alpha($key);
			$mappedName = $this->MapNames($value);
			$objPHPExcel->getActiveSheet()->getColumnDimension($cellName)->setWidth(20);
			$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$mappedName);
			  $cellName.'-'.$rowCount.'-'.$mappedName. '<br>';
			
		}
		$rowCount++;
	
	
	
	  	$edit_query ="SELECT *  FROM `".$this->tablename."`    ;";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
			foreach ($this->columnNames as $key => $value) {
				
				
				
				
				$cellName = $this->num2alpha($key);
				$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$rows[$value]);
				  $cellName.'-'.$rowCount.'-'.$rows[$value]. '<br>';
			}
			$rowCount++;
	
		}
	
		
		// Set password for readonly data
		if($this->password !=null){
		$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setSort(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setInsertRows(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setFormatCells(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setPassword($this->password);
		}
	
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save( 'reports/'.$this->filename);
	
	}
	
	function download(){
		header('Content-type: application/force-download');
		header('Content-disposition: attachment; filename='.$this->filename);
		$head='reports/'.$this->filename;
		$read=readfile($head);
	}
	
	
}



class specialReport extends report{
	
	var $subcolumns;
	var $wise;
	var $assetclmn;
	var $searchTable;
	
	function __construct($title = null,$filename = null ,$tablename,$password = null,$wise, $assetclmn,$searchTable){
			
		$this->tablename = $tablename;
		$this->wise = $wise;
		$this->assetclmn = $assetclmn;
	$this->searchTable = $searchTable;
	
		$this->columnNames = $this->getColumnNames($tablename[$this->searchTable]);
		$this->subcolumns = parent::getColumnNames($tablename['assets_table']);
		if($filename == null)
			$this->filename = 'projectEmployees.xlsx';
		else
			$this->filename = $filename;
	
		if($title == null)
			$this->title = 'Assets Report - New Horizons Company';
		else $this->title = $title;
	
		if($password == null)
			$this->password= $null;
		else $this->password = $password;
	
		$this->create_excel($this->tablename);
		$this->download();
	}
	
	function getColumnNames($table){
		
		 $columnQuery = "SELECT * FROM ".$table.";";
		$columnQuery = mysql_query($columnQuery);
		while($rows = mysql_fetch_array($columnQuery)) {
			$columns[]= $rows[$this->wise];
		}
 		return $columns;
 		
	}
	
	function setColumns($columns,$rowCount, $objPHPExcel){
 		foreach ( $columns as $key => $value) {
			$cellName = $this->num2alpha($key);
			$mappedName = $this->MapNames($value);
			$objPHPExcel->getActiveSheet()->getColumnDimension($cellName)->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
			$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$mappedName);
			  $cellName.'-'.$rowCount.'-'.$mappedName. '<br>';
		}
	}
	
	function create_excel($tables){
		
		require  'php_excel/Classes/PHPExcel.php';
		require  'php_excel/Classes/PHPExcel/Writer/Excel2007.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 2;
		$rowCount++;
		$objPHPExcel = $objPHPExcel;
		$rowCount++;
		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(75);
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D1:J1');
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:C1');
		$objPHPExcel->getActiveSheet()->getStyle('D1:J1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('D1',$this->title);
		$sheet = $objPHPExcel->getActiveSheet();
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Logo');
		$objDrawing->setDescription('Logo');
		$logo = 'images/logo.jpg'; // Provide path to your logo file
		$objDrawing->setPath($logo);
		$objDrawing->setOffsetX(8);    // setOffsetX works properly
		$objDrawing->setCoordinates('A1');
		$objDrawing->setHeight(100); // logo height
		$objDrawing->setWorksheet($sheet);
		
		$rowCount++;$rowCount++;
			foreach ($this->columnNames as $key => $value) {  // FOR EACH PROJECT
				
				 $edit_query ="SELECT  *  FROM `".$this->tablename['assets_table']."` WHERE `".$this->assetclmn."` =  '".$value."' ;"; //gets assets for a project
				$edit_query = mysql_query($edit_query);
				
				$numResults = mysql_num_rows($edit_query);
				if ($numResults > 0) {
				$rowCount++;$rowCount++;
				$cellName = $this->num2alpha($key);
				$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,$value);
				$objPHPExcel->getActiveSheet()->getStyle('B'.$rowCount)->getFont()->setBold(true);
				$rowCount++;
				$rowCount++;
				$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$value);
				$this->setColumns($this->subcolumns,$rowCount, $objPHPExcel);
				$rowCount++;
				}
				
				while($rows = mysql_fetch_array($edit_query)) {  // for all those assets
					foreach ($rows as $rowkey =>$rowvalue){ // for all values
						if ( is_int($rowkey)) {
 							$cellName = $this->num2alpha($rowkey);
						}
						if ( ! is_int($rowkey)) {  
							$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$rowvalue); // set value to cells
 							    $cellName.'-'.$rowCount.'-'.$rowvalue. '<br>';
						}// filter only text array keys
					}  // one line finished
				$rowCount++;
				}  // all assets finished
			} // all assets for that project finished
	
		// Set password for readonly data
		if($this->password !=null){
			$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
			$objPHPExcel->getActiveSheet()->getProtection()->setSort(true);
			$objPHPExcel->getActiveSheet()->getProtection()->setInsertRows(true);
			$objPHPExcel->getActiveSheet()->getProtection()->setFormatCells(true);
			$objPHPExcel->getActiveSheet()->getProtection()->setPassword($this->password);
		}
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save( 'reports/'.$this->filename);
	}
}

	






if(isset($_POST['report'])){
 
if($_POST['type'] == 'project_employees'){
$projectemployees = new report($_POST['title'],'Project_employees.xlsx',$employee_table,$_POST['password']);
}
else if ($_POST['type'] == 'projects'){
	$projectemployees = new report($_POST['title'],'Projects.xlsx',$project_table,$_POST['password']);
}
else if ($_POST['type'] == 'tickets'){
	$projectemployees = new report($_POST['title'],'Tickets.xlsx',$tickets_table,$_POST['password']);
}
else if ($_POST['type'] == 'assets_category'){
	$projectemployees = new report($_POST['title'],'Asset_categories.xlsx',$assets_category_table,$_POST['password']);
}
else if ($_POST['type'] == 'vendors'){
	$projectemployees = new report($_POST['title'],'Vendors.xlsx',$vendor_table,$_POST['password']);
}
else if ($_POST['type'] == 'locations'){
	$projectemployees = new report($_POST['title'],'Locations.xlsx',$locations_table,$_POST['password']);
}
else if ($_POST['type'] == 'department'){
	$projectemployees = new report($_POST['title'],'Departments.xlsx',$department_table,$_POST['password']);
}

}


if(isset($_POST['special_reports'])){
	
	if($_POST['wise'] == 'projects'){
		$projectemployees = new specialReport($_POST['title'],'Project_wise_report.xlsx',$tables,$_POST['password'],'project_name' ,'project','project_table');
	}
	else if ($_POST['wise'] == 'location'){
		
		$projectemployees = new specialReport($_POST['title'],'Location_wise_report.xlsx',$tables,$_POST['password'] ,'location','location','locations_table');
	}
	else if ($_POST['wise'] == 'custodian'){
 
		$projectemployees = new specialReport($_POST['title'],'Custodian_wise_report.xlsx',$tables,$_POST['password'] ,'first_name','custodian','employee_table');
	}
}

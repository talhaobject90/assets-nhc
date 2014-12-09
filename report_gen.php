<?php

include_once('db_connect.php');


 
function num2alpha($n)
{
    for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
        $r = chr($n%26 + 0x41) . $r;
    return $r;
}

	if(isset($_POST['generate'])){
		
		
	//	print_r($_POST);
		
		 
		$sort_by = $_POST['sort_by'];
		$order_by = $_POST['order'];
		//$expiration_type = $_POST['expiration_type'];
		$asset_status = $_POST['asset_status'];
		$asset_category = $_POST['asset_category'];
		$vendor = $_POST['vendor'];
		$project = $_POST['project'];
		$department = $_POST['department'];
		$fields = $_POST['fields'];
		$title = $_POST['title'];
		
		
		
		$sort_array= array(
		'sort_by' =>$sort_by, 
		'order_by' => $order_by,
		//'expiration_type' =>$expiration_type,
		 'asset_status' =>$asset_status, 
		 'asset_category' =>$asset_category,
		'vendor' =>$vendor,
		'project' =>$project,
		'department' =>$department,
		'fields' =>$fields,
		'title' =>$title		
		
		);
		
		
		if($sort_by  != '' && $order_by  != '' )
		 
		create_excel($sort_array, $assets_table);
		
	}
header('Content-type: application/force-download');
header('Content-disposition: attachment; filename=assets_report.xlsx');



function appendQuery($sort_array){
	$append_query = '  WHERE `id` > 1 ';
	if($sort_array['asset_status']  != '' )
	$append_query .=" AND  `status` = '".$sort_array[asset_status]. "'  ";
	
	if($sort_array['asset_category']  != '' )
	$append_query .=" AND  `asset_category` = '".$sort_array[asset_category]. "'  ";
	
	if($sort_array['vendor']  != '' )
	$append_query .=" AND  `vendor` = '".$sort_array[vendor]. "'  ";
	
	if($sort_array['project']  != '' )
	$append_query .=" AND  `project` = '".$sort_array[project]. "'  ";
	
	if($sort_array['department']  != '' )
	$append_query .=" AND  `department` = '".$sort_array[department]. "'  ";
	
	
	return $append_query;
	
	
	
}
	
	function mapNames($value){
		
		switch ($value)
		{
		case 'id':
			return 'ID';
			break;
			
		case 'serial_number':
 			return 'Serial Number';
 			break;
 		
 		case 'name':
 			return 'Name';
 			break;
 			
 		case 'description':
 			return 'Description';
 			break;
 			
 			case 'location':
 			return 'Location';
 			break;
 			
 		case 'custodian':
 			return 'Custodian';
 			break;
			
 		case 'status':
 			return 'Status';
 			break;
 			
 		case 'vendor':
 			return 'Vendor';
 			break;
 			
		case 'vehicle_number':
 			return 'Vehicle Number';
 			break;

 		case 'project':
 			return 'Project';
 			break;
 			
 		case 'asset_category':
 			return 'Asset Category';
 			break;
 			
 		case 'department':
 			return 'Department';
 			break;
 			
 		case 'istemara_expiry':
 			return 'Istemara Expiry';
 			break;
 			
 		case 'insurance_expiry':
 			return 'Insurance Expiry';
 			break;
 		
 		case 'preventive_maintenance':
 			return 'Preventive Maintenance';
 			break;
 			
 		case 'tuv_sticker':
 			return 'TUV Sticker';
 			break;
 			
 		case 'client_sticker':
 			return 'Client Sticker';
 			break;
 			
 		case 'mot_license_expiry':
 			return 'MOT License Expiry';
 			break;
 			
 		case 'total_maintenance':
 			return 'Total Maintenance';
 			break;
 			
 		case 'total_depreciation':
 			return 'Total Depreciation';
 			break;
 			
	 	case 'purchase_price':
	 			return 'Purchase Price';
 			
 		case 'current_value':
 			return 'Current Value';
 			break;
 			
 		case 'date_acquired':
 			return 'Date acquired';
 			break;
 			
 		case 'date_sold':
 			return 'Date sold';
 			break;
 			
 		case 'accident_history':
 			return 'Accident HIstory';
 			break;
 			
 		case 'violation_history':
 			return 'Violation History';
 			break;
	}
 		 
	}

 
function create_excel($sort_array, $assets_table){
	
	if($_POST['title'] == '')
	$title = 'Assets Report - New Horizons Company';
	else $title = $_POST['title'];
	
	
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
	$objPHPExcel->getActiveSheet()->SetCellValue('D1',$title);
	
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
	
	
	
 	

	
	foreach ($sort_array['fields'] as $key => $value) {
		
		$cellName = num2alpha($key);
		$mappedName = mapNames($value);
		$objPHPExcel->getActiveSheet()->getColumnDimension($cellName)->setWidth(20);
		$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$mappedName);
	}
	$rowCount++;

	
	
	     $edit_query ="SELECT *  FROM `".$assets_table."`  " .appendQuery($sort_array)."   ORDER BY `".$sort_array['sort_by']."`  ".$sort_array['order_by']."    ;";	
	$edit_query = mysql_query($edit_query);
	while($rows = mysql_fetch_array($edit_query)) {
		
		
			foreach ($sort_array['fields'] as $key => $value) {
		$cellName = num2alpha($key);
		$objPHPExcel->getActiveSheet()->SetCellValue($cellName.$rowCount,$rows[$value]);
		
	}
	$rowCount++;
	
	}
	
	
 

	// Set password for readonly activesheet
/*$objPHPExcel->getSecurity()->setLockWindows(true);
$objPHPExcel->getSecurity()->setLockStructure(true);
$objPHPExcel->getSecurity()->setWorkbookPassword("password");*/

// Set password for readonly data
/*$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
$objPHPExcel->getActiveSheet()->getProtection()->setSort(true);
$objPHPExcel->getActiveSheet()->getProtection()->setInsertRows(true);
$objPHPExcel->getActiveSheet()->getProtection()->setFormatCells(true);

$objPHPExcel->getActiveSheet()->getProtection()->setPassword('pow123');
*/
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$objWriter->save( 'reports/assets_report.xlsx');
 	
}


 
 $head='reports/assets_report.xlsx';
$read=readfile($head);  
 

 
 
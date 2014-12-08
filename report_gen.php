<?php

include_once('db_connect.php');

	if(isset($_POST['generate'])){
		
		$sort_by = $_POST['sort_by'];
		
		$order_by = $_POST['order'];
		
		
		if($sort_by  != '' && $order_by  != '' )
		 
		create_excel($sort_by,$order_by, $assets_table);
		
	}
header('Content-type: application/force-download');
header('Content-disposition: attachment; filename=assets_report.xlsx');

 
function create_excel($sort_by, $order_by, $assets_table){
	require  'php_excel/Classes/PHPExcel.php';
	require  'php_excel/Classes/PHPExcel/Writer/Excel2007.php';
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->setActiveSheetIndex(0);
 	$rowCount = 2;
	$rowCount++;
	$objPHPExcel = $objPHPExcel;
	$rowCount++;
	$objPHPExcel->getActiveSheet()->SetCellValue('E2'.$rowCount,'Assets Report - New Horizons Company');
	
	
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
	
	
	
	
	
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,'Asset id');
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,'Serial Number');
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,'Asset Name');
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,'Asset description');
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,'Asset Location');
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,'Custodian');
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,'Status');
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,'Manufacturer ');
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,'Plate Number');
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,'Project');
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount,'Asset Category  ');
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount,'Department ');
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount,'Istemara Expiry');
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount,'Insurance Expiry');
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount,'Preventive Maintenace');
	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount,'TUV Sticker');
	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount,'Client Sticker ');
	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount,'MOT License Expiry');
	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount,'Total Maintenance');
	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount,'Total Depreciation  ');
	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount,'Purchase Price');
	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount,'Current Value ');
	$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount,'Date Acquired');
	$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount,'Date Sold ');
	$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount,'Accident History');
	$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount,'Violation History');
	$rowCount++;

	$edit_query ="SELECT * FROM `".$assets_table."`  ORDER BY `".$sort_by."`  ".$order_by.";";
	$edit_query = mysql_query($edit_query);
	while($rows = mysql_fetch_array($edit_query)) {
		if($rows[$sort_by] !='' ){
			$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,$rows['id']);
			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,$rows['serial_number']);
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,$rows['name']);
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,$rows['description']);
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,$rows['location']);
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,$rows['custodian']);
			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,$rows['status']);
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,$rows['vendor']);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,$rows['vehicle_number']);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,$rows['project']);
			$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount,$rows['asset_category']);
			$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount,$rows['department']);
			$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount,$rows['istemara_expiry']);
			$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount,$rows['insurance_expiry']);
			$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount,$rows['preventive_maintenance']);
			$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount,$rows['tuv_sticker']);
			$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount,$rows['client_sticker']);
			$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount,$rows['mot_license_expiry']);
			$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount,$rows['total_maintenance']);
			$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount,$rows['total_depreciation']);
			$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount,$rows['purchase_price']);
			$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount,$rows['current_value']);
			$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount,$rows['date_acquired']);
			$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount,$rows['date_sold']);
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount,$rows['accident_history']);
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount,$rows['violation_history']);
			$rowCount++;

		}
	}

	// Set password for readonly activesheet
/*$objPHPExcel->getSecurity()->setLockWindows(true);
$objPHPExcel->getSecurity()->setLockStructure(true);
$objPHPExcel->getSecurity()->setWorkbookPassword("password");*/

// Set password for readonly data
$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);
$objPHPExcel->getActiveSheet()->getProtection()->setSort(true);
$objPHPExcel->getActiveSheet()->getProtection()->setInsertRows(true);
$objPHPExcel->getActiveSheet()->getProtection()->setFormatCells(true);

$objPHPExcel->getActiveSheet()->getProtection()->setPassword('pow123');

	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$objWriter->save( 'reports/assets_report.xlsx');
 	
}


 
 $head='reports/assets_report.xlsx';
$read=readfile($head);  
 

 
 
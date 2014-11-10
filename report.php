<?php 
	include_once('header-pop.php');
	include_once('db_connect.php');
	
	if(isset($_POST['generate'])){
		
		$sort_by = $_POST['sort_by'];
		
		$order_by = $_POST['order'];
		
		
		if($sort_by  != '' && $order_by  != '' )
		create_excel($sort_by,$order_by, $assets_table);
		
	}
	?>
	
	
	
	
	<div class="col-md-9 col-lg-10" id="content">
	<div class="row">
	<div class="canvas col-md-12" id="main-canvas">
	<form accept-charset="UTF-8" action="" class="form-horizontal"
			id="purchase-main-form" method="post">
				
				
			<section class="form col-sm-9" id="purchase">
<div class="row">
						<div class="page-header">

<h1>Reports</h1>
</div>
					</div>
						<div class="row">
							<div class="page-content col-sm-12">
			 
 
									<div class="form-group col-sm-8 item-qty">
									<label for="asset_id_div"> Sort assets report by   </label> 
											<select class="form-control" id="custodian_select" name="sort_by">
															<option value="">- Sort by -</option>
																														<option value="name">Asset name</option>
																														<option value="location">Asset location</option>
																															<option value="custodian" >Custodian</option>
																															<option value="vendor">Manufacturer</option>
 																															<option value="istemara_expiry">Istemara Expiry </option>
 																															<option value="preventive_maintenance">Preventive Maintenance </option>
																															<option value="insurance_expiry">Insurance Expiry</option>
																															<option value="tuv_sticker">TUV Sticker</option>
																															<option value="client_sticker">Client Sticker</option>
																															<option value="mot_license_expiry">MOT License Expiry </option>
														</select>
														
														
														
											
								</div>
								 	<div class="form-group col-sm-8 item-qty">
							
									<select class="form-control" id="custodian_select" name="order">
																															<option value="ASC">Ascending</option>
																															<option value="DESC">Descending </option>
														</select>
														 								</div>
								</div>
							</div>
							
	 										 
 <input class="btn btn-default btn-primary"  type="submit" name="generate" value="Generate Report"  >
	 <a href="dashboard.php"><input class="btn btn-default"  type="button"  value="Cancel"   style=" margin-left:10px;font-weight:bold;"></a>
 
							</section>
							
	
							</form>
						</div>
					
			<div class="clear">
			</div>
	
	</div>
	</div>
	
	
	
	
	<?php  
	
	


function create_excel($sort_by, $order_by, $assets_table){
require  'php_excel/Classes/PHPExcel.php';
require  'php_excel/Classes/PHPExcel/Writer/Excel2007.php';

$objPHPExcel = new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0);
$rowCount = 2;
$rowCount++;
 	$row_Count++;
	$row_Count = $rowCount + 3;
	$objPHPExcel = $objPHPExcel;
  	$rowCount++;
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,'Asset id');
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,'Asset description');
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,'Asset Location');
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,'Custodian');
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,'Status');
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,'Manufacturer ');
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,'Plate Number');
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,'Project');
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,'Asset Category  ');
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,'Department ');
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount,'Total Maintenance');
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount,'Total Depreciation  ');
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount,'Purchase Price');
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount,'Current Value ');
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount,'Istemara Expiry');
	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount,'Insurance Expiry');
	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount,'Preventive Maintenace');
	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount,'TUV Sticker');
	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount,'Client Sticker ');
	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount,'MOT License Expiry');
	$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount,'Date Acquired');
	$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount,'Date Sold ');
	
	
	$rowCount++;
	$rowCount++;
 
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,'Total Number of Participants');
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,'sdfsdf');
	$rowCount++;
	$rowCount++;
	$rowCount++;
	
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,'Event Name');
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,'sdfsdf');
	$rowCount++;
	$rowCount++;
	
 	echo 	$edit_query ="SELECT * FROM `".$assets_table."`  ORDER BY `".$sort_by."`  ".$order_by.";";
		$edit_query = mysql_query($edit_query);
		while($rows = mysql_fetch_array($edit_query)) {
if($rows[$sort_by] !=''  && $rows[$sort_by] !='0000-00-00' )
	echo 'sdfsd';
	
	
	
 
}
	
	
	

 

	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
	$objWriter->save( 'reports/stats.xlsx');
}




include_once 'footer-pop.php';

  

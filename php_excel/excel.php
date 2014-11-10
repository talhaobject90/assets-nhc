<?php
function excel()
{
	include __DIR__.'/Classes/PHPExcel.php';
	include __DIR__.'/PHPExcel/Writer/Excel2007.php';
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->setActiveSheetIndex(0);
	$rowCount = 1;
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,'No');
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,'Participant Name');
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,'E-mail Id');
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,'Status');
	
}
	add_shorcode('excel','excel');

?>
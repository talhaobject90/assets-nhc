<?php

 
include_once('db_connect.php');


if(isset($_POST['print_ticket']))
{
	$view_id = $_POST['view_id'];
	$expiry_type = $_POST['expiry_type'];
	 header('Content-type: application/vnd.ms-word');
	header('Content-disposition: attachment; filename=nhc_ticket_'.$view_id.'.docx'); 
	 
	
	



  $edit_query = "SELECT *  FROM `".$assets_table."` INNER JOIN `".$tickets_table."` ON `".$tickets_table."`.`asset_id` = `".$assets_table."`.`id` AND `".$tickets_table."`.`id` =".$view_id.";";
$edit_query = mysql_query($edit_query);
while($rows = mysql_fetch_array($edit_query)) {
	$asset_det['id'] = $rows['id'];
	$asset_det['name'] = $rows['name'];
	$asset_det['vehicle_number'] = $rows['vehicle_number'];
	$asset_det['location'] = $rows['location'];
 }

   
 


require_once 'PHP_word/PHPWord.php';
$PHPWord = new PHPWord();
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_TICKET_TEMPLATE.docx');
$document->setValue('expiry_type_title', 'aqaaaa');
$document->setValue('expiry_type', $expiry_type);
$document->setValue('asset_name', $asset_det['name']);
$document->setValue('asset_id', $asset_det['id']);
$document->setValue('plate_number', $asset_det['vehicle_number']);
$document->setValue('asset_location', $asset_det['location']);
$document->save('PHP_word/tickets/open_tickets/nhc_ticket_'.$view_id.'.docx');
 
  

$head='PHP_word/tickets/open_tickets/nhc_ticket_'.$view_id.'.docx';
$read=readfile($head);  

    }





?>

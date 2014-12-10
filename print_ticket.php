<?php

 
include_once('db_connect.php');


if(isset($_POST['print_ticket']))
{
	$view_id = $_POST['view_id'];
	$expiry_type = $_POST['expiry_type'];
	$expiry_date = $_POST['expiry_date'];
	 header('Content-type: application/vnd.ms-word');
	header('Content-disposition: attachment; filename=nhc_ticket_'.$view_id.'.docx'); 
	 
	
	



      $edit_query = "SELECT `".$assets_table."`.`id`,
  												`".$assets_table."`.`name`, 
  														`".$assets_table."`.`vehicle_number`,  
  																`".$assets_table."`.`location`
  		
  		  FROM `".$assets_table."` INNER JOIN `".$tickets_table."` ON `".$tickets_table."`.`asset_id` = `".$assets_table."`.`id` AND `".$tickets_table."`.`id` =".$view_id.";";
$edit_query = mysql_query($edit_query);
while($rows = mysql_fetch_array($edit_query)) {
	$asset_det['id'] = $rows['id'];
	$asset_det['name'] = $rows['name'];
	$asset_det['vehicle_number'] = $rows['vehicle_number'];
	$asset_det['location'] = $rows['location'];
  }

   
 


require_once 'PHP_word/PHPWord.php';
$PHPWord = new PHPWord();

if($expiry_type  == 'Istemara Expiry')
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_ISTEMARA_TICKET.docx');
elseif ($expiry_type  == 'Preventive Maintenance Expiry')
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_PREVENTIVE_MAINTENANCE_TICKET.docx');
elseif ($expiry_type  == 'TUV Sticker Expiry')
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_TUV_STICKER_EXPIRY_TICKET.docx');
elseif ($expiry_type  == 'Client Sticker Expiry')
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_CLIENT_STICKER_EXPIRY_TICKET.docx');
elseif ($expiry_type  == 'MOT License Expiry')
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_MOT_TICKET.docx');
elseif ($expiry_type  == 'Insurance Expiry')
$document = $PHPWord->loadTemplate('PHP_word/tickets/NHC_INSURANCE_TICKET.docx');



$document->setValue('expiry_datedummy', 'sdfsdf');
$document->setValue('expiry_date', $expiry_date);
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

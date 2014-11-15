<?php

 
include_once('../db_connect.php');
require_once 'PHPWord.php';

$PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate('tickets/NHC_TICKET_TEMPLATE.docx');

$document->setValue('expiry_type', 'Sun');
$document->setValue('asset_name', 'Mercury');
$document->setValue('asset_id', 'Sun');
$document->setValue('plate_number', 'Mercury');
$document->setValue('asset_location', 'Mercury');

$document->save('tickets/open_tickets/NHC_INSURANCE_TICKET_edited.docx');
?>

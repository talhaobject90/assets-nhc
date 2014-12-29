<?php
header('Content-type: application/force-download');
header('Content-disposition: attachment; filename='.$_GET['download']);
if(isset($_GET['asset_id']) &&  isset($_GET['download']))
{
$head='uploads/asset_doc_'.$_GET['asset_id'].'/'.$_GET['download'];
$read=readfile($head);

}
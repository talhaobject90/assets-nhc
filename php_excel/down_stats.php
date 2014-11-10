<?php
header('Content-Type: application/force-download');
header('Content-disposition: attachment; filename=stats.xlsx');

$head=__DIR__ . '/stats.xlsx';
$read=readfile($head);
//echo 'executre';
 //     echo ($read);
     
      
   

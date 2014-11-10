<?php
header('Content-Type: application/force-download');
header('Content-disposition: attachment; filename=Participants.xlsx');

$head=__DIR__ . '/participants.xlsx';
$read=readfile($head);
echo 'executre';
//     echo ($read);

<?php
include 'Report.php';

$report = new TabloidReport();
$report->printer();   // encapsulation is good!

echo "Program ended\n\n";
<?php
include '../vendor/autoload.php';


$report = new TabloidReport(
    new DataAccess(),
    new TabloidReportFormatter(),
    new TabloidReportPrinter());
$report->printer();   

echo "Program ended\n\n";
<?php
include '../vendor/autoload.php';


$report = new Report(
    new DataAccess(),
    new LetterReportFormatter(),
    new LetterReportPrinter());
$report->printer();   

echo "Program ended\n\n";
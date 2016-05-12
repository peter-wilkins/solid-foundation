<?php
include 'Report.php';
include 'Printer.php';
include 'DataAccessor.php';
include 'ReportFormat.php';

$report = new Report();
$report->generate();
$printer = new Printer();
$printer->printReport($report);   // encapsulation is good!

echo "Program ended\n\n";
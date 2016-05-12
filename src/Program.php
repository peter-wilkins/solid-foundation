<?php
include '../vendor/autoload.php';
$report = new ReportLarge();
$report->generate();
$printer = new DotMatrixPrinter();
$printer->printReport($report);   // encapsulation is good!

echo "Program ended\n\n";
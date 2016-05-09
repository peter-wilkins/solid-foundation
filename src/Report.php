<?php

include '../vendor/autoload.php';

class Report
{

    public function printer()
    {
        $dataAccess = new DataAccess;
        $dataAccess->getData();
        $reportFormatter = new ReportFormatter();
        $reportFormatter->formatReport();
        $reportPrinter = new ReportPrinter();
        $reportPrinter->printReport();
    }
}


<?php

include '../vendor/autoload.php';

class LetterReport implements Report
{
    public function printer()
    {
        $dataAccess = new DataAccess;
        $dataAccess->getData();
        $reportFormatter = new LetterReportFormatter();
        $reportFormatter->formatReport();
        $reportPrinter = new LetterReportPrinter();
        $reportPrinter->printReport();
    }
}


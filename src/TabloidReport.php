<?php


class TabloidReport extends Report
{

    public function printer()
    {
        $dataAccess = new DataAccess;
        $dataAccess->getData();
        $reportFormatter = new TabloidReportFormatter();
        $reportFormatter->formatReport();
        $reportPrinter = new TabloidReportPrinter();
        $reportPrinter->printReport();
    }
}
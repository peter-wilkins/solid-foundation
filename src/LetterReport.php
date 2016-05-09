<?php

include '../vendor/autoload.php';

class LetterReport implements Report
{
    private $dataAccess;
    private $reportFormatter;
    private $reportPrinter;

    /**
     * LetterReport constructor.
     * @param $dataAccess
     * @param $reportFormatter
     * @param $reportPrinter
     */
    public function __construct(
        IGetData $dataAccess, 
        LetterReportFormatter $reportFormatter, 
        LetterReportPrinter $reportPrinter)
    {
        $this->dataAccess = $dataAccess;
        $this->reportFormatter = $reportFormatter;
        $this->reportPrinter = $reportPrinter;
    }

    public function printer()
    {
        $this->dataAccess->getData();
        $this->reportFormatter->formatReport();
        $this->reportPrinter->printReport();
    }
}


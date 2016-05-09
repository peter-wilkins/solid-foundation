<?php

class Report
{
    private $dataAccess;
    private $reportFormatter;
    private $reportPrinter;

    /**
     * Report constructor.
     * @param $dataAccess
     * @param $reportFormatter
     * @param $reportPrinter
     */
    public function __construct(
        IGetData $dataAccess,
        ReportFormatter $reportFormatter,
        ReportPrinter $reportPrinter)
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
<?php


class TabloidReport implements Report
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
        TabloidReportFormatter $reportFormatter,
        TabloidReportPrinter $reportPrinter)
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
<?php


class ReportLarge extends Report
{

    public function generate()
    {
        DataAccessor::getData();
        ReportFormatLarge::formatReport();
    }
}
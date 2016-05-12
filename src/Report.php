<?php


class Report
{

    public function generate()
    {
        DataAccessor::getData();
        ReportFormat::formatReport();   
    }
}


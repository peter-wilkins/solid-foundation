<?php


class Report
{

    private function formatReport()
    {
        echo "Formatting report for 8-1/2x11...\n\n";
    }

    private function getData()
    {
        echo "\nGetting data from database...\n\n";
    }

    public function printer()
    {
        $this->getData();
        $this->formatReport();
        echo "Printing report to laser printer...\n\n";
    }
}


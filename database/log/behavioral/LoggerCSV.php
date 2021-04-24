<?php

namespace Database\Log\Behavioral;

use Database\Log\Behavioral\LoggerBehavioral;
use Tools\CSVParser;

class LoggerCSV extends LoggerBehavioral
{
    protected $mime = 'csv';

    public function write($message)
    {
        $header = [
            'datetime', 
            'message'   
        ];
        $row = [
            date('d/m/Y h:m:s'),
            $message
        ];

        var_dump($this->filename);
        $file = fopen($this->filename, 'w');
        fputcsv($file, $header, ";");
        fputcsv($file, $row, ";");
        fclose($file);
    }
}

?>
<?php

namespace Tools;

final class CSVParser 
{
    private $file, $delimiter, $data;

    public const FETCH_ASSOC = 'assoc';

    private $counter = 0;

    private function __construct(){}
    
    public static function open($file, $delimiter) : CSVParser
    {
        $oCsvParser = new CSVParser();
        $oCsvParser->data = file($file);
        return $oCsvParser;
    }

    public function fetchAll($fetchType = CSVParser::FETCH_ASSOC)
    {
        switch($fetchType) {
            case 'assoc':
                // $data = [];
                // $table = file($this->file);
                // foreach($table as $key => $value) {
                //     array_push([$key => $value], $data);
                // }
                // return $data;
                break;

            default :
                break;
        }
    }

    public function fetch()
    {
        return count($this->data) > $this->counter ? str_getcsv($this->data[$this->counter ++], $this->delimiter) : false;
    }
}
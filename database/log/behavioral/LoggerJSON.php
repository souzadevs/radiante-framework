<?php

namespace Database\Log\Behavioral;

use Database\Log\Behavioral\LoggerBehavioral;

class LoggerJSON extends LoggerBehavioral
{
    protected $mime = "json";

    public function write($message) 
    {
        date_default_timezone_set('America/Sao_Paulo');

        $json = json_encode([
            'datetime'  => date('d/m/Y h:m:s'),
            'message'   => $message
        ]);

        $hFile = fopen($this->filename, 'w');

        fwrite($hFile, $json);

        fclose($hFile);
    }
}

?>
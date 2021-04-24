<?php 

namespace Database\Log\Behavioral;

use Database\Log\Behavioral\LoggerBehavioral;
use DOMDocument;

class LoggerXML extends LoggerBehavioral
{
    protected $mime = "xml";

    
    public function write($message)
    {
        date_default_timezone_set('America/Sao_Paulo');

        $dom = new DOMDocument('1.0', 'UTF-8');

        $log = $dom->createElement("log");
        
        $log->appendChild($dom->createElement("datetime", date('d/m/Y h:m:s')));
        $log->appendChild($dom->createElement("message", $message));

        $dom->appendChild($log);

        $dom->save($this->filename);
    }
}

?>
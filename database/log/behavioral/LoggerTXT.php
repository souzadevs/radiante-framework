<?php 

namespace Database\Log\Behavioral;

use Database\Log\Behavioral\LoggerBehavioral;

class LoggerTXT extends LoggerBehavioral
{
    protected $mime = "txt";

    public function write($message)
    {
        if(file_exists($this->filename) && is_writeable($this->filename)) {
            file_put_contents($this->filename, $message);
        }
    }
}

?>
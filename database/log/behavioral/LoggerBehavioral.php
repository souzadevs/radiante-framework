<?php 

namespace Database\Log\Behavioral;

abstract class LoggerBehavioral
{
    protected $filename;

    public function __construct($filename, $directory = ROOTS . 'Database\\Log\\Realesed\\')
    {
        $this->filename = $directory . $filename . "." . $this->mime;
        
        if(file_exists($this->filename) && is_writeable($this->filename)) {
            file_put_contents($this->filename, '');
        }
    }

    public function write($message){}
}

?>
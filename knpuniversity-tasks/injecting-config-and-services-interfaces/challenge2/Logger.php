<?php

class Logger
{
    private $logPath;
    
    public function __construct($logPath)
    {
        $this->logPath = $logPath;
    }
    
    public function logMessage($message)
    {
        $fh = fopen($this->logPath, 'a');
        fwrite($fh, $message.PHP_EOL);
    }
}

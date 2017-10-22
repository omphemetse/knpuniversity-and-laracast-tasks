<?php

class Logger
{
    public function logMessage($message)
    {
        $logPath = __DIR__.'/debug.log';

        $fh = fopen($logPath, 'a');
        fwrite($fh, $message.PHP_EOL);
    }
}

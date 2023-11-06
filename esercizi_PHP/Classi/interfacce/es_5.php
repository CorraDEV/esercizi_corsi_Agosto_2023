<?php
    interface Logger{
        public function log($messagio);
    }
    class FileLogger implements Logger {
        public function log($messaggio) {
            $file = fopen("log.txt", "a");
            fwrite($file, $messaggio . "\n");
            fclose($file);
        }
    }

    $log = new FileLogger();
    $log->log("Nuovo messaggio di log");
?>
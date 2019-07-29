<?php

namespace Singleton;

class LogsSingleton
{
    /** @var self $instance Instance of logs class */
    protected static $instance;

    private function __construct() {}
    private function __clone() {}

    public static function obtainInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function recordLog(array $data)
    {
        $filename = 'logs.txt';
        $previousLogs = [];

        if (file_exists($filename) && filesize($filename) > 0) {
            $fileContent = file_get_contents($filename);
            $previousLogs = json_decode($fileContent, true);
        }

        $previousLogs[] = $data;
        $file = fopen($filename, 'w');
        fwrite($file, json_encode($previousLogs));
        fclose($file);
    }

}

$instance = LogsSingleton::obtainInstance();
$newInstance = LogsSingleton::obtainInstance();

if ($instance === $newInstance) {
    echo 'Instances are exactly the same';
}

$instance->recordLog(['1','2','3']);
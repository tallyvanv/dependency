<?php

namespace App\Services;

use Doctrine\ORM\Mapping as ORM;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FileLoggerRepository")
 */
class FileLogger
{
    private $log;

    /**
     * FileLogger constructor.
     */
    public function __construct()
    {
        $this->log = new Logger("info");
    }

    public function logFile()
    {
        return $this->log->pushHandler(new StreamHandler(__DIR__ . '/logs/log.info', Logger::INFO));
    }

    public function passMessage($message)
    {
        return $this->log->info($message);
    }
}

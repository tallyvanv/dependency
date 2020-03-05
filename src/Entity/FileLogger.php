<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\FileLoggerRepository")
 */
class FileLogger
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function logFile($message)
    {
        return file_put_contents(__DIR__.'/logs/log.info', $message, FILE_APPEND);
    }
}

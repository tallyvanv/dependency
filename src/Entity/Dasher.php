<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DasherRepository")
 */
class Dasher implements Transform
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

    public function transform(string $string): string
    {
        $newStr = '';
        foreach(str_split($string) as $index => $letter) {
            if ($letter === " "){
                $newStr .= "-";
            } else {
                $newStr .= $letter;
            }
        }
        return $newStr;
    }
}

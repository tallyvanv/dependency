<?php

namespace App\Services;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizeRepository")
 */

class Capitalize implements Transform
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
        foreach (str_split($string) as $index => $letter) {
            $newStr .= ($index % 2) ? strtolower($letter) : strtoupper($letter);
        }
        return $newStr;
    }
}

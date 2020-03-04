<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizeRepository")
 */
class Capitalize implements transform
{

    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
    }
}

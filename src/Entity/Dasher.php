<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DasherRepository")
 */
class Dasher implements transform
{

    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
    }
}

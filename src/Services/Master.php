<?php

namespace App\Services;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MasterRepository")
 */
class Master
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var Transform
     */
    public $change;

    /**
     * Master constructor.
     * @param Capitalize $cap
     * @param Dasher $dash
     */
    public function __construct(Capitalize $cap, Dasher $dash)
    {
        if (isset($_POST['input'])) {
            if ($_POST['type'] == "cap") {
                return $this->change = $cap->transform($_POST['input'] ?? "");
            } else {
                return $this->change = $dash->transform($_POST['input'] ?? "");
            }
        }
    }


}

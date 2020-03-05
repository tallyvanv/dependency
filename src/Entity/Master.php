<?php

namespace App\Entity;

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
     * @param DoNothingString $nothing
     * @param Capitalize $cap
     * @param Dasher $dash
     */
    public function __construct(DoNothingString $nothing, Capitalize $cap, Dasher $dash)
    {
        if (!isset($_POST['submit'])) {
            return $this->change = $nothing->transform($_POST['input']??"");
        } elseif ($_POST['select'] == "cap") {
            return $this->change = $cap->transform($_POST['input']??"");
        } elseif ($_POST['select'] == "dash") {
            return $this->change = $dash->transform($_POST['input']??"");
        }
    }


}

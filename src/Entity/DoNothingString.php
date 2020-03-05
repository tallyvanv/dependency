<?php


namespace App\Entity;


class DoNothingString implements Transform
{
    public function transform(string $string): string
    {
        return "";
    }

}
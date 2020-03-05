<?php


namespace App\Services;

class DoNothingString implements Transform
{
    public function transform(string $string): string
    {
        return "";
    }

}
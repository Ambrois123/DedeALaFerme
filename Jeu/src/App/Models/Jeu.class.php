<?php

// namespace App\Models;
class Jeu 
{
    public function __construct(
        public ?string $regles = null,
    ){}

    public function displayRules(): string
    {
        return $this->regles;
    }
}
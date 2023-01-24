<?php

class Partie 
{
    public function __construct(
        public ?string $dateTime = null,
        public ?int $score = null,
        public ?string $gagner = null,
    ){}

    public function getDisplayInfo(): string
    {
        $info = '';
        if ($this->dateTime) {
            $info .= 'La date et l\'heure de la partie est : ' . $this->dateTime . '. ';
        } else {
            $info .= 'La date et l\'heure de la partie n\'est pas définie. ';
        }
        if ($this->score) {
            $info .= 'Le score de la partie est : ' . $this->score . '. ';
        } else {
            $info .= 'Le score de la partie n\'est pas défini. ';
        }
        if ($this->gagner) {
            $info .= 'La partie est gagnée. ';
        } else {
            $info .= 'La partie n\'est pas gagnée. ';
        }
        return $info;
    }
}
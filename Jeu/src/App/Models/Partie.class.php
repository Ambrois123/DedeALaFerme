<?php


class Partie 
{
    public function __construct(
        public ?string $dateTime = null,
        public ?int $score = null,
        public ?string $gagner = null,
    ){}

    public function getDisplayDate(): string
    {
        $timestamp = time();
        $this->dateTime = date('Y-m-d H:i:s', $timestamp);
        

        return $this->dateTime;
    }

    public function __toString()
    {
        return $this->getDisplayDate();
    }
}
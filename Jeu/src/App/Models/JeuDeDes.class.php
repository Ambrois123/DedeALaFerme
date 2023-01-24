<?php

class JeuDeDes 
{
    public function __construct(
        public ?int $nb_Des = null,
        public ?int $nb_Lancer_Des = null,
        public ?array $tabDeParLancer = null,
    ){}

    public function lancerDes(): void
    {
        $this->nb_Lancer_Des++;
        $this->tabDeParLancer[$this->nb_Lancer_Des] = [];
        for ($i = 0; $i < $this->nb_Des; $i++) {
            $this->tabDeParLancer[$this->nb_Lancer_Des][] = rand(1, 6);
        }
        
    }
}